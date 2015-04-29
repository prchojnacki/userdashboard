<!DOCTYPE HTML>

<html>
<head>
	<title>Admin Dashboard</title>
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
            <li><a href='/admindashboard/index'>Dashboard</a></li>
            <li><a href="/normaldashboard/editprofile">Account</a></li>
            <li><a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href="/signins/logoff">Log off</a></li>
        </ul>
    </div>
	</nav>
	<div id='container'>
		<div class='row'>
			<h1 class='col-sm-9 col-sm-offset-1'>Manage Users</h1>
			<form action='/admindashboard/newuser' method='post' class='col-sm-1'>
				<input class = 'btn btn-primary' type='submit' value='Add New'>
			</form>
		</div>
		<div class='row'>
			<div class='col-sm-10 col-sm-offset-1'>
				<table class='table table-striped table-bordered table-hover'>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Created At</th>
							<th>User Level</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
			<?php  
					foreach($userquery as $user) {
			 ?>		
						<tr>
							<td><?= $user['id'] ?></td>
							<td><a href='/normaldashboard/view_wall/<?= $user['id'] ?>'><?= $user['first_name'] . " " . $user['last_name'] ?></a></td>
							<td><?= $user['email'] ?></td>
							<td><?= $user['created_at'] ?></td>
							<td><?php
								if( $user['user_level'] == 0) {
									echo "normal";
								} else echo "admin";
							?></td>
							<td>
								<a href="/admindashboard/edit_user/<?= $user['id']?>">edit</a> 
								<?php if ($user['id'] != $this->session->userdata('userid')) { ?>
									<a href="/admindashboard/remove_user/<?= $user['id'] ?>">remove</a></td>
								<?php } ?>
							</tr>

			<?php
				}
			?>
					</tbody>
				</table>
			</div>
		</div>
	</div>







</body>
</html>