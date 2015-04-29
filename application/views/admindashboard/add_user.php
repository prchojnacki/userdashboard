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
	<link rel='stylesheet' href='/assets/main.css'>
</head>
<body>
	<nav class='navbar navbar-default'>
    <div class='collapse navbar-collapse'>
        <ul class='nav navbar-nav'>
            <li><a href=''>Test App</a></li>
            <li><a href='/admindashboard/index'>Dashboard</a></li>
            <li><a href="/normaldashboard/editprofile">Profile</a></li>
            <li><a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href="/signins/logoff">Log off</a></li>
        </ul>
    </div>
	</nav>
	<div id='container-fluid'>
		<div class='row'>
			<h1 class='col-sm-9 col-sm-offset-1'>Add a new user</h1>
			<form action='/admindashboard/index' method='post'>
				<input class = 'btn btn-primary' type='submit' value='Return to Dashboard'>
			</form>
		</div>
		<div class='row'>
			<form action='/admindashboard/create_new_user' method='post' class='form-horizontal'>
				<div class='form-group'>
					<label class='col-sm-2 control-label'>Email Address: </label>
					<div class='col-sm-3'>
						<input type='text' name='email' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-2 control-label'>First Name: </label>
					<div class='col-sm-3'>
						<input type='text' name='first_name' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-2 control-label'>Last Name: </label>
					<div class='col-sm-3'>
						<input type='text' name='last_name' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-2 control-label'>Password: </label>
					<div class='col-sm-3'>
						<input type='password' name='password' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-sm-2 control-label'>Confirm Password: </label>
					<div class='col-sm-3'>
						<input type='password' name='confirm' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<input class = 'btn btn-success col-sm-offset-2' type='submit' value = 'Create' class='form-control'>
				</div>
			</form>
		</div>
	
	<?php if ($this->session->flashdata('registration_errors')) {
		echo $this->session->flashdata('registration_errors');
	} elseif(isset($message)) {
		echo $message;
	}
?>


	</div>
</body>
</html>