<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">​
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


	
</head>
<body>
   
    <div class="container">
        <a href="#" class="btn btn-success btn-add" data-target="#modal-add" data-toggle="modal">Thêm</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Thể loại</th>
                        <th>Ngày ghi chú</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- biến $todos được controller trả cho view
                    chứa dữ liệu tất cả các bản ghi trong bảng notes. Dùng foreach để hiển
                    thị từng bản ghi ra table này. --}}

                    @foreach ($notes as $note)
                        <tr>
                            <td id="{{ $note->id }}">{{ $note->id }}</td>
                            <td id="name-{{ $note->id }}">{{ $note->name }}</td>
                            <td id="content-{{ $note->id }}">{{ $note->content }}</td>
                            <td id="category-{{ $note->id }}">{{ $note->category }}</td>
                            <td id="date-{{ $note->id }}">{{ $note->date }}</td>
                            <td>
                                <button data-url="{{ route('note.show', $note->id) }}" ​ type="button"
                                    data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button>
                                <button data-url="{{ route('note.update', $note->id) }}" ​ type="button"
                                    data-target="#edit" data-toggle="modal" class="btn btn-warning btn-edit">Edit</button>
                                <button data-url="{{ route('note.destroy', $note->id) }}" ​ type="button"
                                    data-target="#delete" data-toggle="modal"
                                    class="btn btn-danger btn-delete">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- {{$notes->links()}} --}}
    </div>

    @include('backend.notes.add')
    @include('backend.notes.detail')
    @include('backend.notes.edit')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script type="text/javascript" charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#form-add').submit(function(e) {
                e.preventDefault();
                var url = $(this).attr('data-url');
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        name: $('#name-add').val(),
                        content: $('#content-add').val(),
                        category: $('#category-add').val(),
                        date: $('#date-add').val(),
                        
                    },
                    success: function(response) {
                        toastr.success(response.message)
                        $('#modal-add').modal('hide');
                        console.log(response.data)
                        $('tbody').prepend('<tr><td id="' + response.data.id + '">' + response
                            .data.id + '</td><td id="name-' + response.data.id + '">' +
                            response.data.name + '</td><td id="content-' + response.data
                            .id + '">' + response.data.content + '</td><td id="category-' +
                            response.data.id + '">' + response.data.category +
                            '</td><td id="date-' + response.data.id + '">' + response.data
                            .date + '</td><td><button data-url="{{ asset('') }}note/' +
                            response.data.id +
                            '"​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button><button style="margin-left: 5px;" data-url="{{ asset('') }}note/' +
                            response.data.id +
                            '"​ type="button" data-target="#edit" data-toggle="modal" class="btn btn-warning btn-edit">Edit</button><button style="margin-left: 5px;" data-url="{{ asset('') }}note/' +
                            response.data.id +
                            '"​ type="button" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button></td></tr>'
                            );

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            })
            $('.btn-show').click(function() {
                var url = $(this).attr('data-url');
                $.ajax({
                    type: 'get',
                    url: url,
                    success: function(response) {
                        console.log(response)
                        $('h1#id').text(response.data.id)
                        $('h1#name').text(response.data.name)
                        $('h1#content').text(response.data.content)
                        $('h1#category').text(response.data.category)
                        $('h1#date').text(response.data.date)
                       
                        $('h1#created_at').text(response.data.created_at)
                        $('h1#update_at').text(response.data.update_at)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            })
            // _token: $('meta[name="_token"]').attr('content');
            $('.btn-delete').click(function() {
                var url = $(this).attr('data-url');
                var _this = $(this);
                if (confirm('ông xóa tôi à?')) {
                    $.ajax({
                        type: 'delete',
                        url: url,
                        success: function(response) {
                            toastr.success('Delete note success!')
                            _this.parent().parent().remove();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            //xử lý lỗi tại đây
                        }
                    })
                }
            })
            $('.btn-edit').click(function(e) {
                var url = $(this).attr('data-url');
                $('#modal-edit').modal('show');
                e.preventDefault();
                $.ajax({
                    //phương thức get
                    type: 'get',
                    url: url,
                    success: function(response) {
                        //đưa dữ liệu controller gửi về điền vào input trong form edit.
                        $('#name-edit').val(response.data.name);
                        $('#category-edit').val(response.data.category);
                        $('#content-edit').val(response.data.content);
                        $('#date-edit').val(response.data.date);
                    
                        //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
                        $('#form-edit').attr('data-url', '{{ asset('note/') }}/' +
                            response.data.id)
                    },
                    error: function(error) {

                    }
                })
            })
            $('#form-edit').submit(function(e) {
                e.preventDefault();
                var url = $(this).attr('data-url');
                $.ajax({
                    type: 'put',
                    url: url,
                    data: {
                        name: $('#name-edit').val(),
                        content: $('#content-edit').val(),
                        category: $('#category-edit').val(),
                        date: $('#date-edit').val(),
                       
                    },
                    success: function(response) {
                        // console.log(response.noteid)
                        toastr.success(response.message)
                        $('#modal-edit').modal('hide');
                        $('#name-' + response.noteid).text(response.note.name)
                        $('#content-' + response.noteid).text(response.note.content)
                        $('#category-' + response.noteid).text(response.note.category)
                        $('#date-' + response.noteid).text(response.note.date)
                        
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            })
        })
    </script>
     
    
</body>
</html>​
