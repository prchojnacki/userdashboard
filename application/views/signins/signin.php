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


    <?php if ($this->session->flashdata('login_error')){
            echo $this->session->flashdata('login_error');
        } ?>
    <div class='row'>
        <h1 class='col-sm-offset-1'>Sign In</h1>
    </div>
    <form action='/signins/signin' method='post' class='form-horizontal'>

        <div class='form-group'>
            <label for='email' class='col-sm-2 control-label'>Email Address: </label>
            <div class='col-sm-5'>
                <input type='email' name='email' id='email' class='form-control'>
            </div>
        </div>
        <div class='form-group'>   
            <label for='password' class='col-sm-2 control-label'>Password: </label>
            <div class='col-sm-5'>
                <input type='password' name='password' id='password' class='form-control'>
            </div>
        </div> 
        <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
                <input type='submit' value='Sign In' class='btn btn-default'>
            </div>
        </div>
    </form>
    <a class='col-sm-offset-2' href='/signins/registerpage'>Don't have an account? Register.</a>
</div>
</body>
</html>