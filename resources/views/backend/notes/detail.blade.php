@extends('master')
@section('content')

<div class="modal fade" id="show">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Detail</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<h2>Thông tin bản ghi:</h2>
			    Tiêu đề: <h1 id="name"></h1>
				Nội dung: <h1 id="content"></h1>
				Thể loại: <h1 id="category"></h1>
				Ngày ghi chú: <h1 id="date"></h1>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
			</div>
		</div>
	</div>
</div>


@endsection