@extends('master')
@section('content')
    <main class="mdl-layout__content">
        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="card mt-2">
                    <h5 class="card-header">Cập nhật thông tin</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('edit.note', $note->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Tên ghi chú</label>
                                <input type="text" name="title" value="{{ $note->title }}"
                                    class="form-control  @error('name') is-invalid @enderror" required>

                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <input type="text" name="content" value="{{ $note->content }}" class="form-control"
                                    required>
                                @error('manager')
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Phân loại</label>
                                <input type="text" name="type" value="{{ $note->type }}" class="form-control" required>

                            </div>
                            <button type="submit" onclick="alert('Cập nhật thành công')" class="btn btn-info">Xácnhận</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
