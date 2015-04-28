<!DOCTYPE HTML>

<html>
<head>
	<title>New User</title>
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
		<h1>Add a new user</h1>
		<form action='/admindashboard/index' method='post'>
			<input class = 'btn btn-primary' type='submit' value='Return to Dashboard'>
		</form>
		<form action='/admindashboard/create_new_user' method='post'>
			<label>Email Address: <input type='text' name='email'></label>
			<label>First Name: <input type='text' name='first_name'></label>
			<label>Last Name: <input type='text' name='last_name'></label>
			<label>Password: <input type='password' name='password'></label>
			<label>Confirm Password: <input type='password' name='confirm'></label>
			<input class = 'btn btn-success' type='submit' value = 'Create'>
		</form>
	
	<?php if ($this->session->flashdata('registration_errors')) {
		echo $this->session->flashdata('registration_errors');
	} elseif(isset($message)) {
		echo $message;
	}
?>


	</div>
</body>
</html>