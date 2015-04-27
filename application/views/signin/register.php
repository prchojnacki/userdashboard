<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
    <h1>Register</h1>
    <form action='/' method='post'>
        <label>Email Address:<input type='text' name='email'></label>
        <label>First Name:<input type='text' name='first_name'></label>
        <label>Last Name:<input type='text' name='last_name'></label>
        <label>Password:<input type='password' name='password'></label>
        <label>Password Confirmation:<input type='password' name='confirm'></label>
        <input type='submit' value='Register'>
    </form>
    <a href='/'>Already have an account? Sign in.</a>
</div>
</body>
</html>