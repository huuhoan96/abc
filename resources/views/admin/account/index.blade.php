@extends('layouts.admin')
@section('title','Quản lý tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="row">
	<div class="col-md-3">
		<div class="">
			<div class="modal-content">
				<div class="modal-header">

					<h4 class="modal-title">Tạo tài khoản admin</h4>
				</div>
				<div class="modal-body">
					<form action="{{route('addAccount')}}" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Tên tài khoản</label>
							<input type="text" class="form-control" name="username" id="" placeholder="Nhập tên tài khoản">
							@if($errors->has('username'))
							<div class="help-block error">
								{{$errors->first('username')}}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Họ tên</label>
							<input type="text" class="form-control" name="fullname" id="" placeholder="Nhập họ tên">
							@if($errors->has('fullname'))
							<div class="help-block error">
								{{$errors->first('fullname')}}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="" class="form-control" name="email" id="" placeholder="Nhập Email">
							@if($errors->has('email'))
							<div class="help-block error">
								{{$errors->first('email')}}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="password" class="form-control" name="password" id="" placeholder="Nhập họ tên">
							@if($errors->has('password'))
							<div class="help-block error">
								{{$errors->first('password')}}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Nhập lại mật khẩu</label>
							<input type="password" class="form-control" name="confirmPassword" id="" placeholder="Nhập lại mật khẩu">
							@if($errors->has('confirmPassword'))
							<div class="help-block error">
								{{$errors->first('confirmPassword')}}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="">Ảnh đại diện</label>
							<input type="file" class="form-control" name="upload_file" id="">
							<input type="hidden" name="status" value="enable">
						</div>
						<div class="form-group">
							<label for="">Quyền admin</label>
							<select name="group_id" id="inputGroup_id" class="form-control">
								@if(Auth::user()->group_id==1)
								@foreach($groups as $group)
								<option value="{{$group->id}}">{{$group->title}}</option>
								@endforeach
								@elseif(Auth::user()->group_id==2)
								<option value="3">Mod</option>
								@endif
							</select>
						</div>
						@csrf
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
							<button type="submit" class="btn btn-primary">Lưu</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">
				<h4 class="text-center">Danh sách tài khoản</h4>
			</div>
			<div class="panel-body">
			<form action="" method="Get" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for=""></label>
					<input type="" class="form-control" name="search" id="" placeholder="Tài khoản / Email / Họ tên..">
				</div>
				<div class="form-group">
					<label class="sr-only" for=""></label>
					<select name="group_id" id="inputGroup_id" class="form-control">
						<option value="">Quyền admin</option>
						@foreach($groups as $group)
						<option value="{{$group->id}}">{{$group->title}}</option>
						@endforeach
					</select>
				</div>
				
			
				<button type="submit" class="fa fa-search btn btn-primary"></button>
			</form>
				@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
				@endif
				@if(Session::has('error'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('error')}}</strong>
				</div>
				@endif
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên tài khoản</th>
							<th>Ảnh đại diện</th>
							<th>Email</th>
							<th>Họ tên</th>
							<th>Quyền admin</th>
							<th>Trạng thái</th>
							<th>Ngày tạo</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($accounts as $account)
						<tr>
							<td>{{$account->id}}</td>
							<td>{{$account->username}}</td>
							<td>
								<img width="50px;" src="{{url('uploads/admin')}}/{{$account->avatar}}" alt="{{$account->avatar}}">
							</td>
							<td>{{$account->email}}</td>
							<td>{{$account->fullname}}</td>
							<td>{{$account->group->title}}</td>
							@if($account->status=='enable')
							<td><span class="label label-info">{{$account->status}}</span></td>
							@else
							<td><span class="label label-danger">{{$account->status}}</span></td>
							@endif
							<td>{{$account->created_at}}</td>
							<td class="text-right">
								<a class="btn btn-xs btn-info fa fa-edit" href="{{route('editAccount',['id'=>$account->id])}}"></a>
								<a class="btn btn-xs btn-danger fa fa-trash" onclick="return confirm('Bạn có muốn tài khoản {{$account->username}} không ???');" href="{{route('deleteAccount',['id'=>$account->id])}}"></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$accounts->links()}}
			</div>
		</div>
	</div>
</div>

@stop()