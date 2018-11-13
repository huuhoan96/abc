@extends('layouts.admin')
@section('title','Quản lý dự án')
@section('links','Dự án')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"><a class="fa fa-long-arrow-left btn btn-default" href=""></a></h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">
			<legend>Thêm mới</legend>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="">Tiêu đề</label>
						<input type="text" name="title" class="form-control" id="name" placeholder="Nhập tiêu đề">
						@if($errors->has('title'))
							<div class="help-block error">
								{{$errors->first('title')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Đường dẫn tĩnh</label>
						<input type="text" name="slug" class="form-control" id="slug" placeholder="Nhập đường dẫn">
						@if($errors->has('slug'))
							<div class="help-block error">
								{{$errors->first('slug')}}
							</div>
						@endif
					</div>
					<input type="hidden" name="created_by" value="{{Auth::user()->username}}">
					<div class="form-group">
						<label for="">Ảnh đại diện</label>
						<input type="file" name="image_cover" class="form-control" >
					</div>
					<div class="form-group">
						<label for="">Sorder</label>
						<input type="text" name="sorder" class="form-control" id="" placeholder="sorder">
					</div>
					<div class="form-group">
						<label for="">type</label>
						<input type="text" name="sorder" class="form-control" id="" placeholder="sorder">
					</div>
					<div class="form-group">
						<label for="">Meta Title</label>
						<input type="text" name="meta_title" class="form-control" id="" placeholder="sorder">
					</div>
					<div class="form-group">
						<label for="">Meta Description</label>
						<input type="text" name="meta_description" class="form-control" id="" placeholder="sorder">
					</div>		
					<div class="form-group">
						<label for="">Meta Keywords</label>
						<input type="text" name="meta_keywords" class="form-control" id="" placeholder="sorder">
					</div>
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<label for="">Mô tả</label>
						<textarea id="content" name="description" placeholder="Mô tả"></textarea>
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<textarea id="content" name="content"  placeholder="Mô tả"></textarea>
						@if($errors->has('content'))
							<div class="help-block error">
								{{$errors->first('content')}}
							</div>
						@endif
					</div>
					@csrf
				</div>
			</div>		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@stop()