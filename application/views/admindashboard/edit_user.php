<!DOCTYPE HTML>

<html>
<head>
	<title>Edit User</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div id='container'>
		<div id='nav'>
			<div class='row'>
				<a href="">Test App</a>
				<a href="">Dashboard</a>
				<a href="">Profile</a>
				<a href="">Wall</a>
				<a href="">Log off</a>
			</div>
		</div>
		<h1>Edit user #<?=$id?></h1>
		<form action='/admindashboard/index' method='post'>
			<input class = 'btn btn-primary' type='submit' value='Return to Dashboard'>
		</form>
		<h3>Edit Information</h3>
		<form action='/admindashboard/change_user_info' method='post'>
			<input type='hidden' name='id' value='<?=$id?>'>
			<label>Email Address: <input type='text' name='email' value='<?=$user["email"]?>'></label>
			<label>First Name: <input type='text' name='first_name' value='<?=$user["first_name"]?>'></label>
			<label>Last Name: <input type='text' name='last_name' value='<?=$user["last_name"]?>'></label>
			<label>User Level: <select class='form-control' name='level'>
				<option value = 'normal'>Normal</option>
				<option value = 'admin'>Admin</option>
			</select></label>
			<input class = 'btn btn-success' type='submit' value = 'Save'>
		</form>
		<h3>Change Password</h3>
		<form>
			<label>Password: <input type='text' name='password'></label>
			<label>Confirm Password: <input type='text' name='confirm'></label>
			<input class = 'btn btn-success' type='submit' value = 'Update Password'>
		</form>
	</div>
</body>
</html>