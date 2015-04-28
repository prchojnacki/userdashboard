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
            <li><a>Test App</a></li>
            <li><a href='/'>Home</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href='/signins/signinpage'>Sign In</a></li>
        </ul>
    </div>
</nav>

<div class='container-fluid'>
    
    <div class='jumbotron'>
        <h1>Welcome to the Test!</h1>
        <p>We're going to build a cool applicatin using a MVC framework! This application was built with the Village88 folks!</p>
        <button class='btn btn-default'><a href='/signins/signinpage'>Start</a></button>
    </div>

    <div class='row-fluid'>
        <div class='col-md-4'>
            <h5>Manage Users</h5>
            <p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
        </div>
        <div class='col-md-4'>
            <h5>Leave messages</h5>
            <p>Users will be able to leave a message to another user using this application.</p>
        </div>
        <div class='col-md-4'>
            <h5>Edit User Information</h5>
            <p>Admins will ge able to edit another user's information (email address, first name, last name, etc)</p>
        </div>
    </div>
</div>
</body>
</html>