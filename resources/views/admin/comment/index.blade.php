@extends('layouts.admin')
@section('title','Quản lý đánh giá sản phẩm')
@section('links','review')
@section('main')
<div class="">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách bình luận</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
			<!-- @if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Title!</strong> Alert body ...
				</div>
			@endif -->
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Sản phẩm</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($comments as $comment)
					<tr>
						<td>{{$comment->id}}</td>
						<td>{{$comment->name}}</td>
						<td>{{$comment->email}}</td>
						<td>{{$comment->comment}}</td>
						<td>{{$comment->product->title}}</td>
						<td>
							<form action="" method="POST" class="form-inline" role="form">
								<input type="hidden" name="id" value="{{$comment->id}}">
								@if($comment->status==0)
								<button type="submit" name="status" value="{{$comment->status}}" class="btn btn-default fa fa-spinner"></button>
								@else
								<button type="submit" name="status" value="{{$comment->status}}" class="btn btn-info fa fa-check"></button>
								@endif
								@csrf
							</form>
						</td>
						<td>{{$comment->created_at}}</td>
						<td>
							<a href="{{route('delComment',['id'=>$comment->id])}}" class="btn btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop()