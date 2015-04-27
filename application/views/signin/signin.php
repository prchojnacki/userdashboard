<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<nav class='navbar navbar-default'>

<div id='container-fluid'>
<div class='collapse navbar-collapse'>
    <ul class='nav navbar-nav'>
        <li><a>Test App</a></li>
        <li><a href='/'>Home</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
        <li><a href='/signins/signinpage'>Sign In</a></li>
    </ul>
</div>
    <h1>Sign In</h1>
    <form action='/signins/signin' method='post'>
        <label>Email Address:<input type='text' name='email'></label>
        <label>Password:<input type='password' name='password'></label>
        <input type='submit' value='Sign In'>
    </form>
    <a href='/'>Don't have an account? Register.</a>
</div>
</nav>
</body>
</html>