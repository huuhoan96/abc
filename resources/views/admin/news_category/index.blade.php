@extends('layouts.admin')
@section('title','Quản lý danh mục tin tức')
@section('links','Tin tức')
@section('main')
<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<legend>@if(isset($editCate->id)) Cập nhật: {{$editCate->title}} @else Tạo danh mục @endif</legend>
			
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" name="title" class="form-control" id="name" placeholder="Nhập tên danh mục" @if(isset($editCate->id)) value="{{$editCate->title}}" @endif>
					@if($errors->has('title'))
					<div class="help-block error">
						{{$errors->first('title')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" name="slug" class="form-control" id="slug" placeholder="Nhập đường dẫn" @if(isset($editCate->id)) value="{{$editCate->slug}}" @endif>
					@if($errors->has('slug'))
					<div class="help-block error">
						{{$errors->first('slug')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Mô tả</label>
					<textarea name="description" class="form-control" placeholder="description" id=""> @if(isset($editCate->id)) {{$editCate->description}} @endif</textarea>
				</div>
				<input type="hidden" name="created_by" value="{{Auth::user()->username}}">
				<div class="form-group">
					<label for="">Danh mục cha</label>
					<select name="parent_id" id="inputParent_id" class="form-control">
						<option value="">Chọn danh mục</option>
						@foreach($cates as $cate)
						@if(isset($editCate->id)) 
						<?php $selected=$cate->id==$editCate->parent_id?"selected":""?>
						<option {{$selected}} value="{{$cate->id}}">{{$cate->title}}</option>
						@else
						<option value="{{$cate->id}}">{{$cate->title}}</option>
						@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Meta_title</label>
					<input type="text" name="meta_title" class="form-control" id="" placeholder="meta_title" @if(isset($editCate->id)) value="{{$editCate->meta_title}}" @endif>
				</div>
				<div class="form-group">
					<label for="">Meta_description</label>
					<input type="text" name="meta_description" class="form-control" id="" placeholder="meta_description" @if(isset($editCate->id)) value="{{$editCate->meta_description}}" @endif>
				</div>
				<div class="form-group">
					<label for="">Meta_keywords</label>
					<input type="text" name="meta_keywords" class="form-control" id="" placeholder="meta_keywords" @if(isset($editCate->id)) value="{{$editCate->meta_keywords}}" @endif>
				</div>
				@csrf
				@if(isset($editCate->id))
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="input" class="form-control" required="required">
						@if($editCate->status=='enable')
						<option selected value="enable">Enable</option>
						<option value="disable">Disable</option>
						@else
						<option selected value="disable">Disable</option>
						<option value="enable">Enable</option>
						@endif
					</select>
				</div>
				@endif
				@if(isset($editCate->id))
				<button type="submit" class="btn btn-primary">Cập nhật</button>
				@else
				<button type="submit" class="btn btn-primary">Thêm</button>
				@endif
				<button type="reset" class="btn btn-danger">Hủy</button>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-info">Danh sách danh mục</h4>
		</div>
		<div class="panel-body">
		@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Success: </strong> {{Session::get('success')}}
			</div>
		@endif
		@if(Session::has('error'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Error: </strong> {{Session::get('error')}}
			</div>
		@endif
		<form action="" method="GET" class="form-inline" role="form">
		
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="" name="search" class="form-control" id="" placeholder="Nhập tiêu đề..">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary fa fa-search"></button>
		</form>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Danh mục cha</th>
						<th>Người tạo</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($new_cates as $new)
					<tr>
						<td>{{$new->id}}</td>
						<td>{{$new->title}}</td>
						<td>{{$new->parent_id}}</td>
						<td>{{$new->created_by}}</td>
						<td>{{$new->status}}</td>
						<td>
							<a href="{{route('editCate',['id'=>$new->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
							<a href="{{route('deleteCate',['id'=>$new->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$new_cates->links()}}
		</div>
	</div>
</div>
@stop()