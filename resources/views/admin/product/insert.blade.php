@extends('layouts.admin')
@section('title','Cập nhật thông tin sản phẩm')
@section('links','Sản phẩm')    
@section('main')
<div class="panel panel-info">

    <div class="panel-body">
        <form action="" method="POST" role="form">
            <legend>Thông tin sản phẩm</legend>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success!</strong> {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error!</strong> {{Session::get('error')}}
            </div>
            @endif
            <div class="col-md-10">
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea type="text" class="form-control" name="contents" id="content" placeholder="Input field"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Lineup</label>
                    <textarea type="text" class="form-control" name="lineup" id="content" placeholder="Input field"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Catalog</label>
                    <textarea type="text" class="form-control" name="catalog" id="content" placeholder="Input field"></textarea>
                </div>
                @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="category_id" id="input" class="form-control" required="required">
                        <option value="">Chọn danh mục</option>
                    @foreach($cates as $cate)
                        <option value="{{$cate->id}}">{{$cate->title}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('category_id'))
                        <div class="help-block">{{$errors->first('category_id')}}</div>
                    @endif
                </div>
            </div>
            
        
        </form>
    </div>
</div>
@stop()
