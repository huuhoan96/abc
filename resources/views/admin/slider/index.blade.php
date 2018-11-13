@extends('layouts.admin')
@section('title','Quản lý slider')
@section('links','slider')
@section('main')
<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-body">
			<form action="" method="POST" enctype="multipart/form-data" role="form">
				<legend>@if(isset($editSlider->id)) Cập nhật @else Tạo Slider @endif</legend>
			
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" name="title" class="form-control" id="name" placeholder="Nhập tiêu đề" @if(isset($editSlider->id)) value="{{$editSlider->title}}" @endif>
					@if($errors->has('title'))
						<div class="help-block error">{{$errors->first('title')}}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" name="slug" class="form-control" id="slug" placeholder="Nhập đường dẫn" @if(isset($editSlider->id)) value="{{$editSlider->slug}}" @endif>
					@if($errors->has('slug'))
						<div class="help-block error">{{$errors->first('slug')}}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Liên kết</label>
					<input type="text" name="link" class="form-control" id="" placeholder="Nhập liên kết" @if(isset($editSlider->id)) value="{{$editSlider->link}}" @endif>
					@if($errors->has('link'))
						<div class="help-block error">{{$errors->first('link')}}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="">Ảnh đại diện</label>
					@if(isset($editSlider->id)) 
					<div class="clearfix"></div>
					<img width="100px" src="{{url('uploads/slider')}}/{{$editSlider->cover_image}}" alt="$editSlider->cover_title">
					@endif
					<input type="file" name="file_upload" class="form-control" id="">
					@if($errors->has('file_upload'))
						<div class="help-block error">{{$errors->first('file_upload')}}</div>
					@endif
				</div>
				<input type="hidden" name="created_by" value="{{Auth::user()->username}}">
				@csrf
				@if(isset($editSlider->id))
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="input" class="form-control">
					@if($editSlider->status=='enable')
						<option selected value="enable">Enable</option>
						<option value="disable">Disable</option>
					@else
						<option selected value="disable">Disable</option>
						<option value="enable">Enable</option>
					@endif
					</select>	
				</div>
				@endif

				<div class="form-group">
					<label for="">Order</label>
					@if(isset($editSlider->id)) 
					<input class="form-control" type="number" value="{{$editSlider->sorder}}" name="sorder">
					@else
					<input class="form-control" type="number" name="sorder">
					@endif
				</div>
				<button type="submit" class="btn btn-primary">Lưu</button>
				<button type="reset" class="btn btn-danger">Hủy</button>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-2">
					<h4 class="panel-info">Danh sách slider</h4>
				</div>
				<div class="col-md-10">
					<form action="" method="GET" class="form-inline" role="form">

					<div class="form-group">
						<input type="" class="form-control" name="search" id="" placeholder="Tên danh mục cần tìm..">
					</div>
					<div class="form-group">
						<select name="created_by" id="inputCreared_by" class="form-control">
							<option value="">Người tạo</option>
							@foreach($users as $user)
							<option value="{{$user->username}}">{{$user->username}}</option>
							@endforeach
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
						<th>Tiêu đề</th>
						<th>Ảnh</th>
						<th>Người tạo</th>
						<th>Sorder</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($sliders as $slider)
					<tr>
						<td>{{$slider->id}}</td>
						<td>{{$slider->title}}</td>
						<td>
							<img height="50px" width="100px" src="{{url('uploads/slider')}}/{{$slider->cover_image}}" alt="{{$slider->cover_title}}">
						</td>
						<td>{{$slider->created_by}}</td>
						<td>
							<form action="{{route('order-slider',['id'=>$slider->id])}}" method="POST" class="form-inline" role="form">
							
								<div class="form-group">
									<input style="width: 50px" name="sorder" type="" class="form-control" value="{{$slider->sorder}}" id="" placeholder="">
								</div>
							
								@csrf()
							
								<button type="submit" class="btn btn-primary fa fa-save"></button>
							</form>
						</td>
						<td>{{$slider->status}}</td>
						<td class="text-right">
							<a href="{{route('editSlider',['id'=>$slider->id])}}" class="btn btn-primary fa fa-edit"></a>
							<a href="{{route('delSlider',['id'=>$slider->id])}}" class="btn btn-danger fa fa-trash"></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$sliders->links()}}
		</div>
	</div>
</div>

@stop()