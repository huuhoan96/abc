@extends('layouts.admin')
@section('title','Danh sách hãng sản phẩm')
@section('links','hãng sản phẩm')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới hãng sản phẩm</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Tên hãng</label>
				<input type="text" class="form-control" name="title" id="" placeholder="Nhập tên hãng">
				@if($errors->has('title'))
					<div class="help-block">
						{{$errors->first('title')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Đường dẫn tĩnh</label>
				<input type="text" class="form-control" name="slug" id="" placeholder="Nhập đường dẫn tĩnh">
				@if($errors->has('slug'))
					<div class="help-block">
						{{$errors->first('slug')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Ảnh đại diện</label>
				<input type="file" class="form-control" name="file_upload" id="">
			</div>
			<div class="form-group">
				<label for="">Liên kết</label>
				<input type="text" class="form-control" name="link" id="" placeholder="Nhập đường dẫn liên kết">
				@if($errors->has('link'))
					<div class="help-block">
						{{$errors->first('link')}}
					</div>
				@endif
				<input type="hidden" name="created_by" value="{{Auth::user()->username}}">
			</div>
			@csrf
			

			<button type="submit" class="btn btn-primary">Thêm mới</button>
		</form>
	</div>
</div>
@stop()