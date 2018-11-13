<h2>Yêu cầu báo giá sản phẩm {{$product}}</h2>
<table border="1" class="table table-hover">
	<thead>
		<tr>
			<th>Họ tên</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Nội dung</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$name}}</td>
			<td>{{$email}}</td>
			<td>{{$phone}}</td>
			<td>{{$content}}</td>
		</tr>
	</tbody>
</table>
<p><a href="{{route('confirm',['id'=>$id])}}">Click vào đây để xác nhận</a></p>