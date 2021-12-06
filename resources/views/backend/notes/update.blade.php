@extends('master')
@section('content')

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="card mt-2">
                <h5 class="card-header">Cập nhật thông tin</h5>
                <div class="card-body">
                    <form method="post" action="{{ route('edit.note', $note->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Tên ghi chú</label>
                                <strong class="text-danger">*</strong>
                                <input type="text" value="{{ $note->name }}" class="form-control" name="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                                    <label>Mô tả</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="text" value="{{ $book->desc }}"
                                           class="form-control @error('desc') is-invalid  @enderror" name="desc">
                                    @error('desc')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div> --}}
                        <div class="form-group">
                            <label >Nội dung</label>
                            <strong class="text-danger">*</strong>
                            <textarea type="text" value="{{ $note->content }}" class="form-control @error('conten') is-invalid  @enderror" id="content"  rows="3"  name="content" ></textarea>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Thể loại</label>
                            <strong class="text-danger">*</strong>
                            <select class="form-control" name="category" value="{{ $note->type }}" class="form-control" required>
                                <option>Công việc</option>
                                <option>Cá nhân</option>
                                <option>Tập thể</option>
                                <option> Sinh nhật</option>
                                <option> Buổi tiệc</option>
                                <option>Cuộc sống</option>
                                <option>Hạnh phúc</option>
                                <option>Buồn</option>
                                <option>Niềm vui</option>
                                <option>Công ty</option>
                                <option>Gia đình</option>
                                <option>Người thân</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="borrow_date" class="col-sm-4 col-form-label">Ngày ghi chú
                                    <strong class="text-danger">*</strong>
                                </label>
                                <div class="">
                                    <input type="date" class="form-control" name="date" id="date" value="{{ $note->date }}" required>
                                </div>
                            @error('date')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                        <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
