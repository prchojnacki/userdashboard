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
	<link rel='stylesheet' href='/assets/main.css'>
</head>
<body>
<nav class='navbar navbar-default'>
    <div class='collapse navbar-collapse'>
        <ul class='nav navbar-nav'>
            <li><a href=''>Test App</a></li>
            <li><a href='/admindashboard/index'>Dashboard</a></li>
            <li><a href="/normaldashboard/editprofile">Account</a></li>
            <li><a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href="/signins/logoff">Log off</a></li>
        </ul>
    </div>
</nav>

	<div class='container-fluid'>
		<div class='row'>
			<h1 class='col-sm-9 col-sm-offset-1'>Edit user #<?=$id?></h1>
			<form action='/admindashboard/index' method='post' class='col-sm-1'>
				<input class = 'btn btn-primary' type='submit' value='Return to Dashboard'>
			</form>
		</div>

		<div class='row'>
			<div class='col-sm-4 col-sm-offset-1'>
				<h3 class='col-sm-offset-1'>Edit Information</h3>
				<form action='/admindashboard/change_user_info' method='post' class='form-horizontal'>
					<input type='hidden' name='id' value='<?=$id?>'>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>Email Address: </label>
						<div class='col-sm-6'>
							<input type='text' name='email' value='<?=$user["email"]?>' class='form-control'>
						</div>
					</div>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>First Name: </label>
						<div class='col-sm-6'>
							<input type='text' name='first_name' value='<?=$user["first_name"]?>' class='form-control'>
						</div>
					</div>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>Last Name: </label>
						<div class='col-sm-6'>
							<input type='text' name='last_name' value='<?=$user["last_name"]?>' class='form-control'>
						</div>
					</div>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>User Level: </label>
						<div class='col-sm-4'>
							<select class='form-control' name='level'>
								<option value = 'normal'>Normal</option>
								<option value = 'admin'>Admin</option>
							</select>
						</div>
					</div>
					<div class='form-group col-sm-7'>
						<input class = 'btn btn-success col-sm-offset-2' type='submit' value = 'Save'>
					</div>
				</form>
			</div>

			<div class='col-sm-5'>
				<h3 class='col-sm-offset-1'>Change Password</h3>
				<form action='/admindashboard/change_user_password' method='post' class='form-horizontal'>
						<input type='hidden' name='id' value='<?=$id?>'>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>Password: </label>
						<div class='col-sm-5'>
							<input class='form-control' type='text' name='password'>
						</div>
					</div>
					<div class='form-group col-sm-12'>
						<label class='col-sm-4 control-label'>Confirm Password: </label>
						<div class='col-sm-5'>
							<input class='form-control' type='text' name='confirm'>
						</div>
					</div>
					<div class='form-group col-sm-12'>
						<input class = 'btn btn-success col-sm-offset-2' type='submit' value = 'Update Password'>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>