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
<div id='container'>
    <div id='nav'>
        <div class='row'>
            <h3>Test App</h3>
            <a href='/'>Home</a>
            <a href='/'>Sign In</a>
        </div>
    </div>
    <h1>Sign In</h1>
    <form action='/' method='post'>
        <label>Email Address:<input type='text' name='email'></label>
        <label>Password:<input type='password' name='password'></label>
        <input type='submit' value='Sign In'>
    </form>
    <a href='/'>Don't have an account? Register.</a>
</div>
</body>
</html>