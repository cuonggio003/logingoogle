@extends('master')
@section('content')

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <section class="get-in-touch">
                <h1 class="text-success">Thêm mới ghi chú</h1>
                <form method="post" action="{{ route('store.note') }}" enctype="multipart/form-data" required>
                    @csrf
                    <div class="form-field col-lg-6">
                        <p><a href="#" class="text-warning">Tên ghi chú<strong class="text-danger">*</strong></a></p>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror" >
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-field col-lg-12">
                        <label class="text-warning">Nội dung</label>
                        <strong class="text-danger">*</strong>
                        <textarea class="form-control" id="content" rows="5" name="content" ></textarea>
                        @error('content')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="form-field col-lg-12">
                        <label class="text-warning">Thể loại</label>
                        <strong class="text-danger">*</strong>
                        <select class="form-control" id=" Tên người viết" name="category" required>
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
                        @error('category')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-field col-lg-6">
                        <label for="date" class="text-warning">Ngày ghi chú
                            <strong class="text-danger">*</strong>
                        </label>
                        <div class="">
                            <input type="date" class="form-control" name="date" id="date" required>
                        </div>
                    @error('date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    {{-- <div class="form-field col-lg-6">
                        <label class="text-warning">Ngày ghi chú
                            <strong class="text-danger">*</strong>
                        </label>
                        <input class="form-control" id="date" name="date" required>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Lưu</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                                <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                    
                </form>
            </section>
        </div>
    </div>
@endsection
