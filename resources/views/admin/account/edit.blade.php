@extends('layouts.admin')
@section('title','Quản lý tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		<h4>Cập nhật tài khoản</h4>
	</div>
	<div class="panel-body">
	
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Tên tài khoản</label>
			<input type="text" class="form-control" name="username" id="" value="{{$account->username}}" placeholder="Nhập tên tài khoản" >
			@if($errors->has('username'))
				<div class="help-block">
					{{$errors->first('username')}}
				</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Họ tên</label>
			<input type="text" class="form-control" name="fullname" id="" value="{{$account->fullname}}" placeholder="Nhập họ tên" >
			@if($errors->has('fullname'))
				<div class="help-block">
					{{$errors->first('fullname')}}
				</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="" class="form-control" name="email" id="" value="{{$account->email}}" placeholder="Nhập Email" >
			@if($errors->has('email'))
				<div class="help-block">
					{{$errors->first('email')}}
				</div>
			@endif
		</div>
		<!-- <div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="password" class="form-control" name="password" id="" value="{{$account->password}}" placeholder="Nhập họ tên" >
		</div> -->
		<div class="form-group">
			<label for="">Ảnh đại diện</label>
			<div class="clearfix"></div>
			<img width="100px" src="{{url('uploads/admin')}}/{{$account->avatar}}" alt="{{$account->avatar}}">
			<input type="file" class="form-control" name="upload_file" id="" >
		</div>
			<input type="hidden" name="status" value="enable">
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="input" class="form-control">
				@if($account->status=='enable')
				<option selected value="enable">enable</option>
				<option value="disable">disable</option>
				@else
				<option selected value="disable">disable</option>
				<option value="enable">enable</option>
				@endif
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Quyền admin</label>
			<select name="group_id" id="inputGroup_id" class="form-control" >
				@if(Auth::user()->group_id==1)
				@foreach($groups as $group)
				<?php $selected= ($account->group_id == $group->id) ? 'selected' : '' ?>
				<option {{$selected}} value="{{$group->id}}">{{$group->title}}</option>
				@endforeach
				@elseif(Auth::user()->group_id==2)
				<option value="3">Mod</option>
				@endif
			</select>
		</div>
		@csrf
		<div class="modal-footer">
			<a href="{{route('account')}}" class="btn btn-default" data-dismiss="modal">Hủy</a>
			<button type="submit" class="btn btn-primary">Lưu</button>
		</div>
	</form>

	</div>
</div>
@stop()