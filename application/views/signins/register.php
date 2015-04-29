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

    <?php 
        if ($this->session->flashdata('registration_errors')){
            echo $this->session->flashdata('registration_errors');
        }

    ?>
    <h1 class='col-sm-offset-1'>Register</h1>
    <form action='/signins/registration' method='post' class='form-horizontal'>
        <div class='form-group'>
            <label for='email' class='col-sm-2 control-label'>Email Address: </label>
            <div class='col-sm-5'>
                <input type='text' name='email'  class='form-control'>
            </div>
        </div>
        <div class='form-group'>
            <label for='first_name' class='col-sm-2 control-label'>First Name: </label>
            <div class='col-sm-5'>
                <input type='text' name='first_name' class='form-control'>
            </div>
        </div>
        <div class='form-group'>
            <label for='last_name' class='col-sm-2 control-label'>Last Name: </label>
            <div class='col-sm-5'>
                <input type='text' name='last_name' class='form-control'>
            </div>
        </div>
        <div class='form-group'>
            <label for='password' class='col-sm-2 control-label'>Password: </label>
            <div class='col-sm-5'>
                <input type='password' name='password' class='form-control'>
            </div>
        </div>
        <div class='form-group'>
            <label for='confirm' class='col-sm-2 control-label'>Confirm Password: </label>
            <div class='col-sm-5'>
                <input type='password' name='confirm'  class='form-control'>
            </div>
        </div>
        <div class='form-group'>
            <input class='btn btn-default col-sm-offset-2' type='submit' value='Register'>
        </div>
    </form>
    <a class='col-sm-offset-2' href='/signins/signinpage'>Already have an account? Sign in.</a>
</div>

</body>
</html>