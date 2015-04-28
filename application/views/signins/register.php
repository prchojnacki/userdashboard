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
    <?php 
        if ($this->session->flashdata('registration_errors')){
            echo $this->session->flashdata('registration_errors');
        }

    ?>
    <h1>Register</h1>
    <form action='/signins/registration' method='post'>
        <label>Email Address:<input type='text' name='email'></label>
        <label>First Name:<input type='text' name='first_name'></label>
        <label>Last Name:<input type='text' name='last_name'></label>
        <label>Password:<input type='password' name='password'></label>
        <label>Password Confirmation:<input type='password' name='confirm'></label>
        <input type='submit' value='Register'>
    </form>
    <a href='/signins/signinpage'>Already have an account? Sign in.</a>
</div>
</nav>
</body>
</html>