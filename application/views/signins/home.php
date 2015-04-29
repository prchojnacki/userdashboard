<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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

            <li><a href='/'>Home</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href='/signins/signinpage'>Sign In</a></li>
        </ul>
    </div>
</nav>

<div class='container-fluid'>
    
    <div class='jumbotron'>
        <h1>Welcome to the User Dashboard!</h1>
        <p>This cool application was built using the CodeIgniter MVC framework! Courtesy of Paula and Shain!</p>
        <button class='btn btn-default'><a href='/signins/registerpage'>Start</a></button>
    </div>

    <div class='row-fluid'>
        <div class='col-md-4'>
            <h5>Manage Users</h5>
            <p>In the User Dashboard, administrators can add, remove, and edit users for the application.</p>
        </div>
        <div class='col-md-4'>
            <h5>Leave messages</h5>
            <p>Users will be able to leave messages for each user on their customizable profile pages.</p>
        </div>
        <div class='col-md-4'>
            <h5>Edit User Information</h5>
            <p>Admins can edit each others' information (email address, first name, last name, etc).</p>
        </div>
    </div>
</div>
</body>
</html>