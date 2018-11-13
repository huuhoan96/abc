@extends('layouts.admin')
@section('title','Import sản phẩm hàng loạt từ file .csv')
@section('links','Sản phẩm')    
@section('main')
<div class="panel panel-default">
    <div class="panel-heading">CSV Import</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{Session::get('success')}}</strong>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{Session::get('error')}}</strong>
            </div>
        @endif
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                <div class="col-md-6">
                    <input id="csv_file" type="file" class="form-control" name="csv_file">

                    @if ($errors->has('csv_file'))
                        <span class="help-block">
                        <strong>{{ $errors->first('csv_file') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="header" checked> File contains header row?
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Tải lên file .CSV
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop()
