<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.5 Ajax CRUD Example</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">
		        <div class="pull-left">
		            <h2>Laravel 5.5 Ajax CRUD Example Demo</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create New Post</button>
		        </div>
		    </div>
		</div>
		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Title</th>
				<th>Details</th>
				<th width="200px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>

		<ul id="pagination" class="pagination-sm"></ul>

		<!-- Create Item Modal -->
		<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

<h4 class="modal-title" id="myModalLabel">Create Item</h4>

</div>

<div class="modal-body">



<form data-toggle="validator" action="{{ route('post.store') }}" method="POST">

<div class="form-group">

<label class="control-label" for="title">Title:</label>

<input type="text" name="title" class="form-control" data-error="Please enter title." required />

<div class="help-block with-errors"></div>

</div>

<div class="form-group">

<label class="control-label" for="title">Description:</label>

<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

<div class="help-block with-errors"></div>

</div>

<div class="form-group">

<button type="submit" class="btn crud-submit btn-success">Submit</button>

</div>

</form>

</div>

</div>

</div>

</div>
		<!-- Edit Item Modal -->
		


<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

<h4 class="modal-title" id="myModalLabel">Edit Item</h4>

</div>

<div class="modal-body">



<form data-toggle="validator" action="/item-ajax/14" method="put">

<div class="form-group">

<label class="control-label" for="title">Title:</label>

<input type="text" name="title" class="form-control" data-error="Please enter title." required />

<div class="help-block with-errors"></div>

</div>

<div class="form-group">

<label class="control-label" for="title">Description:</label>

<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

<div class="help-block with-errors"></div>

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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<script type="text/javascript">
		var url = "<?php echo route('post.index')?>";
	</script>
	<script>var page = 1;
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
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.title+'</td>';
	  	rows = rows + '<td>'+value.details+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});
	$("tbody").html(rows);
}

/* Create new Post */
$(".crud-submit").click(function(e) {
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var title = $("#create-item").find("input[name='title']").val();
    var details = $("#create-item").find("textarea[name='details']").val();
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{title:title, details:details}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
    });
});

/* Remove Post */
$("body").on("click",".remove-item",function() {
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data) {
        c_obj.remove();
        toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});

/* Edit Post */
$("body").on("click",".edit-item",function() {
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var details = $(this).parent("td").prev("td").text();
    $("#edit-item").find("input[name='title']").val(title);
    $("#edit-item").find("textarea[name='details']").val(details);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});

/* Updated new Post */
$(".crud-submit-edit").click(function(e) {
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var title = $("#edit-item").find("input[name='title']").val();
    var details = $("#edit-item").find("textarea[name='details']").val();
    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{title:title, details:details}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});</script> 
</body>
</html>