@extends('layouts.admin')
@section('title','Yêu cầu báo giá')
@section('links','Sản phẩm')    
@section('main')
<div class="panel panel-info">
    <div class="panel-heading ">
        <form action="" method="GET" class="form-inline" role="form">
            <div class="form-group">
                <input type="" name="search" class="form-control" id="" placeholder="Họ tên/ Email/ Số điện thoại">
            </div>
            <div class="form-group">
                <input type="name_product" class="form-control" id="" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <select name="status" id="input" class="form-control">
                    <option value="">Tất cả trạng thái</option>
                    <option value="2">Chưa báo giá</option>
                    <option value="1">Đã báo giá</option>
                </select>
            </div>
            
        
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Sản phẩm</th>
                    <th>Số điện thoại</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($quotes as $qts)
                <tr>
                    <td>{{$qts->id}}</td>
                    <td>{{$qts->name}}</td>
                    <td>{{$qts->email}}</td>
                    <td>{{$qts->product}}</td>
                    <td>{{$qts->phone}}</td>
                    <td>{{$qts->content}}</td>
                    <td>
                    @if($qts->status==0)
                        <span title="Đang chờ báo giá" href="" class="fa fa-spinner btn btn-default"></span>
                    @else
                        <span title="Đã báo giá" href="" class="fa fa-check btn btn-primary"></span>
                    @endif
                    </td>
                    <td>{{$qts->created_at}}</td>
                    <td>
                        <a href="" class="fa fa-trash btn btn-danger"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$quotes->links()}}
    </div>
</div>
@stop()
