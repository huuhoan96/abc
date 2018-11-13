@extends('layouts.admin')
@section('title','Quản lý tin tức')
@section('links','Tin tức')
@section('main')
<div class="row">
	<div class="panel panel-info">
		<div class="panel-heading">
			<a href="{{route('news')}}" class="btn btn-md btn-info">Quay lại</a>

		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<legend>Cập nhật tin tức</legend>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="title" class="form-control" id="name" value="{{$news->title}}" placeholder="Nhập tiêu đề">
							@if($errors->has('title'))
							<div class="help-block error">{{$errors->first('title')}}</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Đường dẫn tĩnh</label>
							<input type="text" name="slug" class="form-control" id="slug" value="{{$news->slug}}" placeholder="Nhập đường dẫn">
							@if($errors->has('slug'))
							<div class="help-block error">{{$errors->first('slug')}}</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Danh mục bài viết</label>
							<select name="category_id" id="inputNews_category_id" class="form-control">
								<option value="1">Danh mục</option>
								@foreach($cates as $cate)
								<?php $selected=$cate->id==$news->category_id?"selected":""?>
									<option {{$selected}} value="{{$cate->id}}">{{$cate->title}}</option>	
								@endforeach
							</select>
							@if($errors->has('category_id'))
							<div class="help-block error">{{$errors->first('category_id')}}</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Ảnh đại diện</label>
							<div class="clearfix"></div>
							<img width="100px" src="{{url('uploads/news')}}/{{$news->image_cover}}" alt="{{$news->title}}">
							<input type="file" name="file_upload" class="form-control" id="" placeholder="Nhập đường dẫn">
						</div>
						<div class="form-group">
							<label for="">Loại tin</label>
							<select name="type" id="inputType" class="form-control">
								<option value="">Chọn loại tin</option>
								<option value="news">Tin mới</option>
								<option value="project">Dự án</option>
								<option value="internal">Nội bộ</option>
							</select>
							@if($errors->has('type'))
							<div class="help-block error">{{$errors->first('type')}}</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Meta Title</label>
							<input type="" name="meta_title" class="form-control" id="" value="{{$news->meta_title}}" placeholder="Meta_title">
						</div>
						<div class="form-group">
							<label for="">Meta Description</label>
							<input type="" name="meta_description" class="form-control" id="" value="{{$news->meta_description}}" placeholder="Meta_description">
						</div>
						<div class="form-group">
							<label for="">Meta Keywords</label>
							<input type="" name="meta_keywords" class="form-control" id="" value="{{$news->meta_keywords}}" placeholder="meta_keywords">
						</div>
						<div class="form-group">
							<label for="">Trạng thái</label>
							<select name="status" id="inputStatus" class="form-control">
								@if($news->status=="enable")
								<option selected value="enable">Enable</option>
								<option value="disable">Disable</option>
								@else
								<option selected value="disable">Disable</option>
								<option value="enable">Enable</option>
								@endif
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Mô tả</label>
							<textarea name="description" id="content" class="form-control" rows="3">{{$news->description}}</textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nội dung</label>
							<textarea name="content" id="content" class="form-control" rows="3">{{$news->content}}</textarea>
						</div>
						@if($errors->has('content'))
						<div class="help-block error">{{$errors->first('content')}}</div>
						@endif
					</div>
				</div>
				@csrf
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</form>
		</div>
	</div>
</div>

@stop()