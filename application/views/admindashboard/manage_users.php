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
</head>
<body>
	<div id='container'>
		<div id='nav'>
			<div class='row'>
				<a href="">Test App</a>
				<a href="">Dashboard</a>
				<a href="">Profile</a>
				<a href="">Wall</a>
				<a href="/signins/signinpage">Log off</a>
			</div>
		</div>
		<h1>Manage Users</h1>
		<form action='/admindashboard/newuser' method='post'>
			<input class = 'btn btn-primary' type='submit' value='Add New'>
		</form>
		<table class='table table-striped'>
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
					<td><a href=''><?= $user['first_name'] . " " . $user['last_name'] ?></a></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['created_at'] ?></td>
					<td><?php
						if( $user['user_level'] == 0) {
							echo "normal";
						} else echo "admin";
					?></td>
					<td><a href="/admindashboard/edit_user/<?= $user['id']?>">edit</a> <a href="/admindashboard/remove_user/<?= $user['id'] ?>">remove</a></td>
				</tr>

	<?php
		}
	?>
			</tbody>
		</table>
	</div>







</body>
</html>