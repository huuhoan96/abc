@extends('layouts.admin')
@section('title','Quản lý tài liệu')
@section('links','Dịch vụ')
@section('main')
<div class="col-md-3">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<legend>Thông tin tài liệu</legend>
	
		<div class="form-group">
			<label for="">Tên tài liệu</label>
			<input type="text" name="title" class="form-control" id="" placeholder="Nhập tên tài liệu" @if(isset($edit->id)) value="{{$edit->title}}" @endif>
			@if($errors->has('title'))
				<div class="help-block error">{{$errors->first('title')}}</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Tùy chọn</label>
			<select name="type" id="inputType" class="form-control">
				<option value="catalog">Catalog</option>
				<option value="pricelist">Price List</option>
				<option value="manuals">Manuals</option>
				<option value="software">Software</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Danh mục</label>
			<select name="category_id" class="form-control">
			<option value="">Danh mục</option>
			@if(isset($edit->id))
				@foreach($cates as $cate)
				<?php $selected=$cate->id==$edit->category_id?'selected':''?>
					<option {{$selected}} value="{{$cate->id}}">{{$cate->title}}</option>
				@endforeach
			@else
				@foreach($cates as $cate)
					<option value="{{$cate->id}}">{{$cate->title}}</option>
				@endforeach
			@endif
			</select>
		</div>
		<div class="form-group">
			<label for="">Nội dung</label>
			<textarea class="form-control" name="content" placeholder="Thêm nội dung tại đây!">@if(isset($edit->id)){{$edit->content}} @endif</textarea>
		</div>
		<div class="form-group">
			<label for="">Ảnh tài liệu</label>
			<div class="clearfix"></div>
			@if(isset($edit->id)) <img width="100px" src="{{url('uploads/download')}}/{{$edit->cover_image}}" alt="{{$edit->title}}"> @endif
			<input type="file" name="file_upload">
		</div>
		<div class="form-group">
			<label for="">Tải tệp</label>
			<div class="clearfix"></div>
			@if(isset($edit->id)) <img width="100px" src="{{url('uploads/download')}}/{{$edit->file_download}}" alt="{{$edit->title}}"> @endif
			<input type="file" name="file_upload2">

		</div>
		<div class="form-group">
			<label for="">Loại tệp</label>
			<select name="type_file" id="inputType" class="form-control">
			@if(isset($edit->id))
				@if($edit->type_file=='file')
				<option selected value="file">File</option>
				<option value="link">Link</option>
				@else
					<option value="file">File</option>
					<option selected value="link">Link</option>
				@endif
			@else
					<option selected value="file">File</option>
					<option value="link">Link</option>
			@endif
			</select>
		</div>			
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="input" class="form-control">
				@if($cate->status=='enable')
				<option value="enable">Enable</option>
				<option value="disable">Disable</option>
				@else
				<option value="disable">Disable</option>
				<option value="enable">Enable</option>
				@endif
			</select>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="">Sorder</label>
					<input type="text" name="sorder" class="form-control" id="" placeholder="Sorder" @if(isset($edit->id)) value="{{$edit->sorder}}" @endif>

				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		@csrf
		<button type="submit" class="btn btn-primary">Lưu</button>
		<button type="reset" class="btn btn-default">Hủy</button>
	</form>
</div>

<div class="col-md-9">
	<div class="panel panel-info">
	<div class="panel-heading">
		<div class="row">
				<div class="col-md-3">
					<h4 class="panel-info">Danh sách tải xuống</h4>
				</div>
				<div class="col-md-9">
					<form action="" method="GET" class="form-inline" role="form">

					<div class="form-group">
						<input type="" class="form-control" name="search" id="" placeholder="Tên danh mục cần tìm..">
					</div>
					<div class="form-group">
						<select name="category_id" id="inputStatus" class="form-control">
							<option value="">Danh mục</option>
							@foreach($cates as $cate)
							<option value="{{$cate->id}}">{{$cate->title}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<select name="type" id="inputStatus" class="form-control">
							<option value="">Type-All</option>
							<option value="catalog">Catalog</option>
							<option value="pricelist">Price List</option>
							<option value="manuals">Manuals</option>
							<option value="software">Software</option>
						</select>
					</div>
					<div class="form-group">
						<select name="status" id="inputStatus" class="form-control">
							<option value="">Trạng thái</option>
							<option value="enable">Enable</option>
							<option value="disable">Disable</option>
						</select>
					</div>
					@csrf

					<button type="submit" class="btn btn-info">Tìm kiếm</button>
				</form>
				</div>
			</div>
	</div>
	<div class="panel-body">
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('success')}}</strong>
	</div>
	@endif	
	@if(Session::has('error'))
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>{{Session::get('error')}}</strong>
	</div>
	@endif	
	<table class="table table-bordered table-hover">
		<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Ảnh tài liệu</th>
					<th>Type</th>
					<th>Danh mục</th>
					<th>Nội dung</th>
					<th>Type_file</th>
					<th>Sorder</th>
					<th>Trạng thái</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($downloads as $download)
				<tr>
					<td>{{$download->id}}</td>
					<td>{{$download->title}}</td>
					<td>{{$download->cover_image}}</td>
					<td>{{$download->type}}</td>
					<td>{{$download->category->title}}</td>
					<td>{{$download->content}}</td>
					<td>{{$download->type_file}}</td>
					<td>
						<form action="{{route('update-download',['id'=>$download['id']])}}" method="POST" class="form-inline" role="form">
						
							<div class="form-group">
								<label class="sr-only" for="">label</label>
								<input style="width: 45px;" type="" class="form-control" name="sorder" value="{{$download->sorder}}" id="" placeholder="">
							</div>
						@csrf()	
							<button type="submit" class="fa fa-save btn btn-primary"></button>
						</form>
					</td>
					<td>{{$download->status}}</td>
					<td>
						<a href="{{route('editDownload',['id'=>$download->id])}}" class="fa fa-edit btn btn-primary btn-xs"></a>
						<a href="{{route('deleteDownload',['id'=>$download->id])}}" class="fa fa-trash btn btn-danger btn-xs"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
	</table>
	{{$downloads->links()}}
</div>
</div>

@stop()