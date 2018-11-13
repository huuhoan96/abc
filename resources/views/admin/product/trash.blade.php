@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('links','Sản phẩm')    
@section('main')
@if(Auth::user()->group_id==1)
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title title-product">Sản phẩm đã xóa</h3>
    </div>
    <div class="panel-body">
    @if(Session::has('success'))
    <div class="alert-1">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
            </div>
        </div>
        @elseif(Session::has('error'))
        <div class="row">
            <div class="col-md-4">
                <div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{Session::get('error')}}</strong>
                </div>
            </div>
        </div>
    </div>
    @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Đường dẫn tĩnh</th>
                    <th>Danh mục</th>
                    <th>Người tạo</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $p)
                <tr>
                    <td>{{$p->title}}</td>
                    <td>{{$p->slug}}</td>
                    <td>{{$p->category_id}}</td>
                    <td>{{$p->created_by}}</td>
                    <td>{{$p->status}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>
                        <a href="{{route('undo',['id'=>$p->id])}}" class="btn btn-primary fa fa-undo"></a>
                        <a href="{{route('deletePro',['id'=>$p->id])}}" class="btn btn-danger fa fa-remove"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</div>
        

<script type="text/javascript">
    var url = "<?php echo route('post.index')?>";
</script>
<!-- <script src="{{url('public/js/posts-ajax.js')}}"></script>  -->
@endif

@stop()
