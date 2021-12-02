@extends('master')
@section('content')
    <main class="mdl-layout__content">
        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <section class="get-in-touch">
                    <h1 class="title">Thêm mới ghi chú</h1>
                    <form method="post" action="{{ route('store.note') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-field col-lg-6">
                            <label for="">Tên ghi chú</label>
                            <input type="text" name="title" value="{{ old('name') }}"
                                class="form-control  @error('name') is-invalid @enderror" required>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <label for="">Nội dung</label>
                            <input class="form-control" id=" Tên người viết" name="content" required>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <label for="">Phân loại</label>
                            <input class="form-control" id=" Tên người viết" name="type" required>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-field col-lg-12">
                            <button onclick="alert('Thêm mới thành công')" type="submit"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>
@endsection
