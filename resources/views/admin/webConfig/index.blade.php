@extends('layouts.admin')
@section('title','Quản lý cấu hình web')
@section('links','web config')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Cấu hình web</h3>
	</div>
	<div class="panel-body">
		<form action="{{route('saveConfig')}}" method="POST" role="form">
		@foreach($webcfs as $webcf)
			<div class="form-group">
			<input type="hidden" name="id" value="{{$webcf->id}}">
				<label for="">Adress</label>
				<textarea type="text" name="address" class="form-control" id="" placeholder="Input field">{{$webcf->address}}</textarea>
			</div>
			<div class="form-group">
				<label for="">Default Meta Description</label>
				<input type="text" name="defaultMetaDescription" class="form-control" id="" value="{{$webcf->defaultMetaDescription}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Default Meta Keywords</label>
				<input type="text" name="defaultMetaKeywords" class="form-control" id="" value="{{$webcf->defaultMetaKeywords}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Default Meta Title</label>
				<input type="text" name="defaultMetaTitle" class="form-control" id="" value="{{$webcf->defaultMetaTitle}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" id="" value="{{$webcf->email}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Facebook Url</label>
				<input type="" name="facebook_url" class="form-control" id="" value="{{$webcf->facebook_url}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">fax</label>
				<input type="" name="fax" class="form-control" id="" value="{{$webcf->fax}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Google Plus Url</label>
				<input type="" name="googleplus_url" class="form-control" id="" value="{{$webcf->googleplus_url}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Hotline</label>
				<input type="" name="hotline" class="form-control" id="" value="{{$webcf->hotline}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Left Bar Content</label>
				<input type="" name="leftbar" class="form-control" id="" value="{{$webcf->leftbar}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Pinterest Url</label>
				<input type="" name="pinterest_url" class="form-control" id="" value="{{$webcf->pinterest_url}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Site Title</label>
				<input type="" name="siteTitle" class="form-control" id="" value="{{$webcf->siteTitle}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 1 title</label>
				<input type="" name="tabindex1" class="form-control" id="" value="{{$webcf->tabindex1}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 2 title</label>
				<input type="" name="tabindex2" class="form-control" id="" value="{{$webcf->tabindex2}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 3 title</label>
				<input type="" name="tabindex3" class="form-control" id="" value="{{$webcf->tabindex3}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 4 title</label>
				<input type="" name="tabindex4" class="form-control" id="" value="{{$webcf->tabindex4}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 5 title</label>
				<input type="" name="tabindex5" class="form-control" id="" value="{{$webcf->tabindex5}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tab index 6 title</label>
				<input type="" name="tabindex6" class="form-control" id="" value="{{$webcf->tabindex6}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">telephone</label>
				<input type="" name="telephone" class="form-control" id="" value="{{$webcf->telephone}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Twiter Url</label>
				<input type="" name="twiter_url" class="form-control" id="" value="{{$webcf->twiter_url}}" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Video</label>
				<input type="" name="video" class="form-control" id="" value="{{$webcf->video}}" placeholder="Input field">
			</div>
		@endforeach
			@csrf
		
			<button type="submit" class="btn btn-primary">Lưu</button>
			<button type="reset" class="btn btn-info">Reset</button>
		</form>
	</div>
</div>
@stop()