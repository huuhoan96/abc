@extends('layouts.admin')
@section('title','Quản lý tin tức')
@section('links','Tin tức')
@section('main')
	<div class="panel panel-info">
		<div class="panel-heading">
		<form action="" method="GET" class="form-inline" role="form">
		<a href="{{route('addNews')}}" class="btn btn-md btn-info">Tạo tin tức</a>

			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="" name="search" class="form-control" id="" placeholder="Nhập tiêu đề..">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary fa fa-search"></button>
		</form>
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
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Danh mục bài viết</th>
						<th>Ảnh đại diện</th>
						<th>Người tạo</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($news as $new)
					<tr>
						<td>{{$new->id}}</td>
						<td>{{$new->title}}</td>
						<td>{{$new->Cat->title}}</td>
						<td>
							<img width="50px" src="{{url('uploads/news')}}/{{$new->image_cover}}" alt="{{$new->title}}">
						</td>
						<td>{{$new->created_by}}</td>
						<td>{{$new->status}}</td>
						<td>
							<a href="{{route('editNews',['id'=>$new->id])}}" class="btn btn-xs btn-primary fa fa-edit"></a>
							<a href="{{route('deleteNews',['id'=>$new->id])}}" class="btn btn-xs btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$news->links()}}
		</div>
	</div>

@stop()