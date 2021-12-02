@extends('master')
@section('content')
    <main class="mdl-layout__content">
        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="col-12 mt-2">
                    <a class="btn btn-success" href="{{ route('create.note') }}">Thêm mới</a>
                </div>
                <div class="card mt-2">
                    <h5 class="card-header">Danh sách bản ghi</h5>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>

                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Phân loại</th>
                                <th></th>

                            </tr>
                            @forelse($notes as $key => $note)
                                <tr id="note-item-{{ $note->id }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $note->title }}</td>
                                    <td>{{ $note->content }}</td>
                                    <td>{{ $note->type }}</td>
                                    <td></td>
                                    <td><a href="{{ route('update.note', $note->id) }}" class="btn btn-primary">Sửa</a></td>
                                    <td><a onclick="alert('Chắc chắn muốn xóa')" href=" {{ route('delete.note', $note->id) }}" class="btn btn-danger">Xóa</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8 ">No data</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
    </main>
@endsection
