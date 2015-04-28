<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
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
        <?php
            if ($this->session->userdata('admin') == 'admin') {
        ?>
            <a href='/admindashboard/index'>Home</a>
        <?php
            } else {
        ?>
            <a href='/normaldashboard/index'>Home</a>
        <?php
            }
        ?>
            <a href='/'>Log Off</a>
            <a href='/'>Profile</a>
            <a href='/'>Wall</a>
        </div>
    </div>
    <h1>Edit profile</h1>
<div class='row'>
    <div class='col-md-6'>
        <form action='/normaldashboard/update_profile' method='post'>
            <h5>Edit Information</h5>
            <label>Email:<input type='email' name='email'></label>
            <label>First Name:<input type='text' name='first_name'></label>
            <label>Last Name:<input type='text' name='last_name'></label>
            <label>Edit Description<textarea name='description'></textarea></label>
            <input type='submit' value='Save'>
        </form>
    </div>
    <div class='col-md-6'>
        <form action='/normaldashboard/update_password' method='post'>
            <h5>Change Password</h5>
            <label>Password:<input type='text' name='password'></label>
            <label>Password Confirmation:<input type='text' name='confirm'></label>
            <input type='submit' value='Update Password'>
        </form>
    </div>
</div>



</div>
</body>
</html>