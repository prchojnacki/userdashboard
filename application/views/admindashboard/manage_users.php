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
				<a href="">Log off</a>
			</div>
		</div>
		<h1>Manage Users</h1>
		<form>
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
				<tr>
					<td>1</td>
					<td>Michael Choi</td>
					<td>michael@village88.com</td>
					<td>Dec 24th 2012</td>
					<td>admin</td>
					<td><a href="">edit</a> <a href="">remove</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>