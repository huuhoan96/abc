@extends('layouts.admin')
@section('title','Nhóm tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Cập nhật</h4>
	</div>
	<div class="panel-body">
	@if(Session::has('error'))
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('error')}}</strong>
		</div>
	@endif
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Tên nhóm</label>
				<input type="text" class="form-control" name="title" id="" value="{{$group->title}}" placeholder="Nhập tên nhóm">
				@if($errors->has('title'))
					<div class="help-block">
						{{$errors->first('title')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="inputStatus" class="form-control">
					@if($group->status=='enable')
					<option selected value="enable">Enable</option>
					<option value="enable">Disable</option>
					@else
					<option value="enable">Enable</option>
					<option selected value="enable">Disable</option>
					@endif
				</select>
			</div>	
			@csrf
			<button type="submit" class="btn btn-primary">Cập nhật</button>
		</form>
	</div>
</div>
@stop()