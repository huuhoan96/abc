var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data) {
        total_page = data.last_page;
        current_page = data.current_page;
        $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,
            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                  getPageData();
                }
            }
        });
        manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* Get Page Data*/
function getPageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data) {
        manageRow(data.data);
    });
}

/* Add new Post table row */
function manageRow(data) {
    var rows = '';
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.title+'</td>';
        rows = rows + '<td>'+value.slug+'</td>';
        rows = rows + '<td>'+value.category_id+'</td>';
        rows = rows + '<td>'+value.created_by+'</td>';
        rows = rows + '<td>'+
        '<form class="form-inline" method="post">'
            +'<div class="form-group">'
            +'<input style="width:50px" class="form-control" type="text"/>'
            +'<button class="fa fa-save btn btn-primary">'+'</button>'
            +'</div>'
            +'</form>'
        +'</td>';
        rows = rows + '<td>'+value.status+'</td>';
        rows = rows + '<td>'+value.created_at+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-id="'+value.id+'" data-target="#edit-item" class="edit-item btn btn-info fa fa-edit"></button> ';
        rows = rows + '<button class="btn btn-danger fa fa-trash remove-item"></button>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
    });
    $("tbody").html(rows);
}

/* Create new Post */
$(".crud-submit").click(function(e) {
    e.preventDefault();
     $('.error').html();
     $('.error').addClass('hidden');
    var form_action = $("#create-item").find("form").attr("action");
    var data_form = $('#formDemo').serializeArray();
    data_form.push({name:"upload_file",value:new FormData($("#upload_file")[0])});
    // logo:new FormData($("#upload_form")[0]),
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:data_form,
        success:function(res){
            // console.log(res);
           if (res.errors) {
            toastr.error('Validation error!', 'Error', {timeOut: 5000});
            for(var er in res.errors){
                $('.error_'+er).html(res.errors[er][0]);
                $('.error_'+er).removeClass('hidden');
            }
           }
           else{
            getPageData();
            toastr.success('Thêm sản phẩm thành công', 'Success', {timeOut: 5000});
           }
        }
    });
});

/* Remove Post */
$("body").on("click",".remove-item",function() {
    var id = $(this).parent("td").data('id');
    var status = "delete";
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        data:{id:id,status:status},
        type:'PUT',
        url: url + '/' + id,
    }).done(function(data) {
        c_obj.remove();
        toastr.success('Post Deleted Successfully.','Success Alert', {timeOut: 5000});
        getPageData();
    });
});

/* Edit Post */
$("body").on("click",".edit-item",function() {
    var id = $(this).data('id');
    // alert(id);
    $.ajax({
        url: 'http://localhost/codehoplongtech/admin/product/edit/' + id,
        type:'GET',
        success:function(res){
            console.log(res);
            $("#edit-item").find("input[name='title']").val(res.title);
            // $("#edit-item").find("select[name='status']").val(res.status);
            $("#edit-item").find("input[name='slug']").val(res.slug);
            $("#edit-item").find("input[name='short_description']").val(res.short_description);
            $("#edit-item").find("textarea[name='contents']").val(res.contents);
            $("#edit-item").find("input[name='dimension']").val(res.dimension);
            $("#edit-item").find("input[name='sorder']").val(res.sorder);
            $("#edit-item").find("textarea[name='feature']").val(res.feature);
            $("#edit-item").find("input[name='download_id']").val(res.download_id);
            $("#edit-item").find("input[name='product_code']").val(res.product_code);
            $("#edit-item").find("textarea[name='specifications']").val(res.specifications);
            $("#edit-item").find("input[name='catalog']").val(res.catalog);
            $("#edit-item").find("input[name='price']").val(res.price);
            $("#edit-item").find("input[name='warranty']").val(res.warranty);
            $("#edit-item").find("select[name='category_id']").val(res.category_id);
            $("#edit-item").find("input[name='meta_title']").val(res.meta_title);
            $("#edit-item").find("input[name='meta_description']").val(res.meta_description);
            $("#edit-item").find("input[name='meta_keywords']").val(res.meta_keywords);
            $("#edit-item").find("form").attr("action",url + '/' + id);
        }
    });
   
});

/* Updated new Post */
$(".crud-submit-edit").click(function(e) {
    e.preventDefault();
    var data_form = $('#formEdit').serializeArray();
    var form_action = $("#edit-item").find("form").attr("action");
    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:data_form
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});