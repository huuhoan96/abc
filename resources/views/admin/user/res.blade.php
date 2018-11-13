<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
				<form action="" method="POST" role="form">
				<legend>Form title</legend>
			
				<div class="form-group">
					<label for="">name</label>
					<input type="text" class="form-control" name="name" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">email</label>
					<input type="text" class="form-control" name="email" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">password</label>
					<input type="text" class="form-control" name="password" id="" placeholder="Input field">
				</div>
			
				
				@csrf()
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>