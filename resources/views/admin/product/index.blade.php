@extends('layouts.admin')
@section('title','Danh sách sản phẩm')
@section('links','Danh mục')    
@section('main')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="main-pro">
    <div class="row">
        <div class="col-md-4">
            <div class="">
                <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create New Post</button> -->
                <div class="" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                    <div class="" role="document">

                        <div class="">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

                                <h4 class="modal-title" id="myModalLabel">Tạo mới sản phẩm</h4>

                            </div>

                            <div class="modal-body">



                                <form data-toggle="validator" id="formDemo" method="GET" action="{{ route('post.store') }}" enctype="multipart/form-data">

                                    <ul class="nav nav-tabs" style="font-style:20px">
                                      <li class="active "><a data-toggle="tab" href="#home">Thông tin cơ bản</a></li>
                                      <li class=""><a data-toggle="tab" href="#menu1">Chi tiết</a></li>
                                  </ul>

                                  <div class="tab-content">
                                      <div id="home" class="tab-pane fade in active">
                                          <br>
                                          <div class="form-group">

                                            <label class="control-label" for="title">Tên sản phẩm:</label>

                                            <input type="text" name="title" id="name" class="form-control" placeholder="Tên sản phẩm" required>
                                            
                                            <p class="error error_title hidden"></p>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label" for="slug">Đường dẫn tĩnh:</label>

                                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Đường dẫn tĩnh" required>

                                            <p class="error error_slug hidden"></p>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="short_description">Mô tả ngắn:</label>
                                            <input type="text" name="short_description" id="short_description" placeholder="Mô tả ngắn" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="specifications">Thông số kỹ thuật:</label>
                                            <textarea type="text" id="content" name="specifications" class="form-control"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="feature">Đặc tính:</label>

                                            <textarea type="text" id="content" name="feature" class="editor_short form-control"></textarea>

                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="content">Tổng quan:</label>
                                            <textarea type="text" id="content" name="contents" class="editor_short form-control"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="control-label" for="lineup">Lineup:</label>
                                            <textarea type="text" id="desc" name="specifications" class="editor_short form-control"></textarea>
                                        
                                            <div class="help-block with-errors"></div>

                                        </div> -->
                                        <div class="form-group">

                                            <label class="control-label" for="catalog">catalog:</label>

                                            <textarea name="catalog" id="content" class="form-control"></textarea>

                                            <div class="help-block with-errors"></div>
                                            <input type="hidden" name="created_by" value="{{Auth::user()->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="upload_file">Ảnh</label>
                                            <input type="file" name="upload_file" class="form-control" id="upload_file" data-error="Please enter details.">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="product_code">Mã sản phẩm</label>
                                            <input type="text" name="product_code" id="product_code" placeholder="Mã sản phẩm" class="form-control">
                                        </div>

                                        <input type="hidden" name="status" value="enable">
                                        <div class="form-group">

                                            <label class="control-label" for="price">Giá:</label>

                                            <input name="price" class="form-control" value="Liên hệ: 1900.6536">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">

                                            <label class="control-label" for="warranty">Bảo hành:</label>

                                            <input name="warranty" class="form-control" placeholder="Bảo hành" value="12 tháng">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="promotion">Khuyến mãi</label>
                                            <input type="text" name="promotion" id="promotion" placeholder="Khuyến mãi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="category_id">Danh mục:</label>
                                            <select name="category_id" id="" class="form-control" data-error="Bạn chưa chọn danh mục." required>
                                                <option value="">Chọn danh mục</option>
                                                @foreach($cates as $cate)
                                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                                @endforeach
                                                
                                            </select>
                                            <div class="error error_category_id help-block with-errors hidden"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">ID tải xuống</label>
                                            <input type="text" name="download_id" id="promotion" placeholder="ID tải xuống" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm bán chạy</label>
                                            <!-- <select name="" id="input" class="form-control" required="required">
                                                <option value="">Sản phẩm mới</option>
                                            </select> -->
                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_best_seller" value="enable">Enable
                                            <input type="radio" name="is_best_seller" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm nổi bật</label>
                                            <!-- <select name="" id="input" class="form-control" required="required">
                                                <option value="">Sản phẩm mới</option>
                                            </select> -->
                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_promotion" value="enable">Enable
                                            <input type="radio" name="is_promotion" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm mới</label>
                                            <!-- <select name="" id="input" class="form-control" required="required">
                                                <option value="">Sản phẩm mới</option>
                                            </select> -->
                                            <div class="clearfix"></div>
                                            <input type="radio" name="is_new_product" value="enable">Enable
                                            <input type="radio" name="is_new_product" value="disable">Disable
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="download_id">Sản phẩm đặc biệt</label>
                                            <!-- <select name="" id="input" class="form-control" required="required">
                                                <option value="">Sản phẩm mới</option>
                                            </select> -->
                                            <div class="clearfix"></div>
                                            <input type="radio" name="special_product" value="enable">Enable
                                            <input type="radio" name="special_product" value="disable">Disable
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <br>

                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Kích thước</label>
                                            <input type="" name="dimension" placeholder="Kích thước" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="dimension">Lineup</label>
                                            <input type="" name="Lineup" placeholder="Lineup" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="sorder">Sorder</label>
                                            <input type="" name="sorder" id="sorder" placeholder="Sorder" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_title">Meta Title</label>
                                            <input type="" name="meta_title" placeholder="Meta Title" class="form-control">
                                            <p class="error error_meta_title hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_description">Meta Description</label>
                                            <input type="" name="meta_description" placeholder="Meta Description" class="form-control">
                                            <p class="error error_meta_description hidden"></p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                                            <input type="" name="meta_keywords" placeholder="Meta Keywords" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                    </div>
                                </div>

                                
                                @csrf
                                <div class="form-group">
                                    <button type="submit" class="btn crud-submit btn-success">Thêm mới</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>   
    </div>
    <div class="col-md-8">
        <div class="title-product" pull-left">
            <h4>Danh sách sản phẩm</h4>
        </div>
        <form action="" method="POST" class="form-inline" role="form">
        
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <input type="" class="form-control" id="search" name="search" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <select name="categoryID" id="categoryID" class="form-control">
                    <option value="">Danh mục</option>
                    @foreach($cates as $cate)
                    <option value="{{$cate->id}}">{{$cate->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <select name="" id="input" class="form-control">
                    <option value="">Người tạo</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <select name="" id="input" class="form-control">
                    <option value="">Trạng thái</option>
                    <option value="enable">Enable</option>
                    <option value="disable">Disable</option>
                </select>
            </div>
            @csrf
            @if(Auth::user()->group_id==1)
            <div class="form-group">
                <a class="btn btn-default" href="{{route('trash')}}">Sản phẩm đã xóa</a>
            </div>
            @endif
            <button type="submit" class="btn btn-primary fa fa-search"></button>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Đường dẫn tĩnh</th>
                    <th>Danh mục</th>
                    <th>Người tạo</th>
                    <th>Sorder</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <ul id="pagination" class="pagination-sm"></ul>
            <!-- @foreach($pros as $pro)
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          <p>
                            {!!$pro->specifications!!}
                          </p>
              </div>
              @endforeach -->
    </div>
</div>




<!-- Create Item Modal -->

<!-- Edit Item Modal -->



<div class="modal fade width" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                <h4 class="modal-title"  >Sửa thông tin sản phẩm</h4>

            </div>

            <div class="modal-body">



                <form id="formEdit" data-toggle="validator" action="/item-ajax/14" method="put">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#edit-pages1">Thông tin cơ bản</a></li>
                      <li><a data-toggle="tab" href="#edit-pages2">Chi tiết</a></li>
                  </ul>

                  <div class="tab-content">
                      <div id="edit-pages1" class="tab-pane fade in active">
                          <br>
                          <div class="form-group">

                            <label class="control-label" for="title">Tên sản phẩm:</label>

                            <input type="text" name="title" id="title" class="form-control" data-error="Tên sản phẩm không được để trống." required />

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">
                            <label class="control-label" for="slug">Đường dẫn tĩnh:</label>
                            <input name="slug" class="form-control" data-error="Đường dẫn không được để trống." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="slug">Mô tả ngắn:</label>
                            <textarea name="short_description" class="form-control"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="slug">Kích thước:</label>
                            <input name="dimension" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="cover_image">Ảnh</label>
                            <input name="cover_image" type="file" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="slug">Mã sản phẩm</label>
                            <input name="product_code" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                            <input type="hidden" name="modified_by" value="{{Auth::user()->user_name}}">
                        <div class="form-group">
                            <label class="control-label" for="price">Giá:</label>
                            <input name="price" class="form-control" data-error="Đường dẫn không được để trống." >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="meta_title">Meta Title</label>
                            <input name="meta_title" class="form-control" data-error="Đường dẫn không được để trống." >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="meta_description">Meta Description</label>
                            <input name="meta_description" class="form-control" data-error="Đường dẫn không được để trống.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="meta_keywords">Meta Keywords</label>
                            <input name="meta_keywords" class="form-control" data-error="Đường dẫn không được để trống." >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div id="edit-pages2" class="tab-pane fade">
                        <br>
                        <div class="form-group">
                            <label class="control-label" for="feature">Đặc tính:</label>
                            <textarea name="feature" id="content" class="form-control"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="specifications">Thông số kỹ thuật:</label>
                            <textarea name="specifications" id="content" class="form-control"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dimension">Khuyến mãi</label>
                            <input name="dimension" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dimension">Download ID</label>
                            <input name="download_id" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="catalog">Catalog:</label>
                            <input name="catalog" class="form-control">
                            <div class="help-block with-errors"></div>
                            <input type="hidden" name="created_by" value="{{Auth::user()->username}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="soder">Sorder</label>
                            <input name="sorder" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="warranty">Bảo hành:</label>
                            <input name="warranty" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="warranty">Danh mục</label>
                            <select name="category_id" id="inputCategory_id" class="form-control" >
                                @foreach($cates as $cate)
                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="status">Trạng thái</label>
                            <select name="status" id="inputStatus" class="form-control">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                    </div>
                </div>
                
                
                
                <div class="form-group">
                    
                    <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                </div>

            </form>
        </div>

    </div>

</div>

</div>
</div>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
<script type="text/javascript">
    var url = "<?php echo route('post.index')?>";
</script>
<script src="{{url('public/js/posts-ajax.js')}}"></script> 

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
<script type="text/javascript">
    $('#statusID').on('change',function(e){
        console.log(e);
        var statusID = e.target.value;
        alert(statusID);
    })
</script>
@stop()
