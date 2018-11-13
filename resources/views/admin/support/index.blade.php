@extends('layouts.admin')
@section('title','Quản lý support')
@section('links','support')
@section('main')
<div class="col-md-4">
	<form action="" method="POST" role="form">
		<legend>Thêm người hỗ trợ</legend>
		<div class="form-group">
			<label for="">Họ tên *</label>
			<input type="text" name="username" class="form-control" id="" placeholder="Nhập họ tên" @if(isset($editSup->id)) value="{{$editSup->username}}" @endif>
			@if($errors->has('username'))
			<div class="help-block error">
				{{$errors->first('username')}}
			</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Email *</label>
			<input type="text" name="email" class="form-control" id="" placeholder="Nhập email" @if(isset($editSup->id)) value="{{$editSup->email}}" @endif>
			@if($errors->has('email'))
			<div class="help-block error">
				{{$errors->first('email')}}
			</div>
			@endif
		</div>
		<div class="form-group">
			<label for="">Skype name</label>
			<input type="text" name="sky_name" class="form-control" id="" placeholder="Nhập tên skype" @if(isset($editSup->id)) value="{{$editSup->sky_name}}" @endif>
		</div>
		<div class="form-group">
			<label for="">Yahoo name</label>
			<input type="text" name="yahoo_name" class="form-control" id="" placeholder="Nhập yahoo" @if(isset($editSup->id)) value="{{$editSup->yahoo_name}}" @endif>
		</div>
		<div class="form-group">
			<label for="">Type</label>
			<select name="type" id="inputType" class="form-control">
				@if(isset($editSup->id))
					@if($editSup->type=="business") 
					<option selected value="business">business</option>
					<option value="technical">technical</option>
					@else
					<option selected value="technical">technical</option>
					<option value="business">business</option>
					@endif
				@else
					<option value="technical">technical</option>
					<option value="business">business</option>
				@endif
			</select>
		</div>
		@if(isset($editSup->id))
		<div class="form-group">
			<label for="">Trạng thái</label>
			<select name="status" id="inputStatus" class="form-control">
				@if($editSup->status=="enable")
				<option selected value="enable">enable</option>
				<option value="disable">disable</option>
				@else
				<option selected value="disable">disable</option>
				<option value="enable">enable</option>
				@endif
			</select>
		</div>
		@endif
		@csrf
		@if(isset($editSup->id))
		<button type="submit" class="btn btn-primary">Cập nhật</button>
		@else
		<button type="submit" class="btn btn-primary">Tạo</button>
		@endif
		<button type="reset" class="btn btn-danger">Hủy</button>
	</form>
</div>
<div class="col-md-8">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-3">
					<h4 class="panel-info">Danh sách Supporter</h4>
				</div>
				<div class="col-md-9">
					<form action="" method="GET" class="form-inline" role="form">

					<div class="form-group">
						<input type="" class="form-control" name="search" id="" placeholder="Tên danh mục cần tìm..">
					</div>
					<div class="form-group">
						<select name="type" id="inputStatus" class="form-control">
							<option value="">Type-All</option>
							<option value="business">business</option>
							<option value="technical">technical</option>
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
			<table class="table table-hover">
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
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ tên</th>
						<th>Kiểu</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($supports as $support)
					<tr>
						<td>{{$support->id}}</td>
						<td>{{$support->username}}</td>
						<td>{{$support->type}}</td>
						<td>{{$support->status}}</td>
						<td class="text-right">
							<a href="{{route('editSup',['id'=>$support->id])}}" class="fa fa-edit btn btn-primary"></a>
							<a href="{{route('delSup',['id'=>$support->id])}}" class="fa fa-trash btn btn-danger"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$supports->links()}}
		</div>
	</div>
</div>
@stop()