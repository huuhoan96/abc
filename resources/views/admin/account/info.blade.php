@extends('layouts.admin')
@section('title','Tài khoản')
@section('links','Tài khoản')
@section('main')
<div class="panel panel-info">
	<!-- Default panel contents -->
	<div class="panel-heading">
		
	</div>
	<div class="panel-body">
	<div class="row">
		<div class="col-md-2">
			<div class="avatar_info text-center">
				<img width="100%" src="{{url('uploads/admin')}}/{{Auth::user()->avatar}}" alt="Avatar admin">
				<p class="label label-primary">Cấp độ: {{Auth::user()->group->title}}</p>
				<div class="clearfix"></div>
				<span class="label label-info">5 <i class="fa fa-edit"></i></span>
			</div>
		</div>
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="panel-title text-center">Thông tin tài khoản</h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="container">
							<table class="table table-hover">
						<thead>
							<tr>
								<th width="100px">Họ tên</th>
								<td>:</td>
								<td>{{Auth::user()->fullname}}</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Tài khoản</th>
								<td>:</td>
								<td>{{Auth::user()->username}}</td>
							</tr>
							<tr>
								<th>Email </th>
								<td>:</td>
								<td>{{Auth::user()->email}}</td>
							</tr>
							<tr>
								<th>Quyền admin</th>
								<td>:</td>
								<td>{{Auth::user()->group->title}}</td>
							</tr>
							<tr>
								<th></th>
								<td></td>
								<td><a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'>Đổi mật khẩu</a>
								<div class="modal fade" id="modal-id">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Đổi mật khẩu</h4>
											</div>
											<div class="modal-body">
												<form action="{{route('changePassword')}}" method="POST" role="form">
													<div class="form-group">
														<label for="">Mật khẩu cũ</label>
														<input type="password" class="form-control" name="oldPass" id="" placeholder="Nhập mật khẩu cũ" data-error="Mật khẩu không được để trống" required>
													</div>	
													<div class="form-group">
														<label for="">Mật khẩu mới</label>
														<input type="password" class="form-control" name="password" id="" data-error="Mật khẩu không được để trống" required placeholder="Nhập mật khẩu mới">
													</div>	
													@csrf
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div></td>
							</tr>
						</tbody>
					</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
@stop()