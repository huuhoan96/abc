@extends('layouts.admin')
@section('title','Quản lý dự án')
@section('links','Dự án')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			<a href="{{route('create_project')}}" class="btn btn-default">Tạo mới</a>
		</h3>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Ảnh đại diện</th>
					<th>Người tạo</th>
					<th>Trạng thái</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($project as $proj)
				<tr>
					<td>{{$proj->id}}</td>
					<td>{{$proj->title}}</td>
					<td>{{$proj->image_cover}}</td>
					<td>{{$proj->created_by}}</td>
					<td>{{$proj->status}}</td>
					<td>
						<a href="" class="btn btn-info fa fa-edit"></a>
						<a href="{{route('delProject',['id'=>$proj->id])}}" class="btn btn-danger fa fa-trash"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop()