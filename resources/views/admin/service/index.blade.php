@extends('layouts.admin')
@section('title','Quản lý cấu hình web')
@section('links','Dịch vụ')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách dịch vụ</h3>
	</div>
	<div class="panel-body">
	<table class="table table-bordered table-hover">
		<thead>
				<tr>
					<th>ID</th>
					<th>Tiêu đề</th>
					<th>Đường dẫn</th>
					<th>Nội dung</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($services as $service)
				<tr>
					<td>{{$service->id}}</td>
					<td>{{$service->title}}</td>
					<td>{{$service->type}}</td>
					<td>{!!$service->content!!}</td>
					<td>
						<a href="" class="btn btn-xs btn-primary fa fa-edit"></a>
					</td>
				</tr>
			@endforeach
			</tbody>
	</table>
</div>
@stop()