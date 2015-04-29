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
    <nav class='navbar navbar-default'>
    <div class='collapse navbar-collapse'>
        <ul class='nav navbar-nav'>
            <li><a href='/normaldashboard/index'>Dashboard</a></li>
            <li><a href="/normaldashboard/editprofile">Account</a></li>
            <li><a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href="/signins/logoff">Log off</a></li>
        </ul>
    </div>
    </nav>

    <div id='container'>
        <h1 class='col-sm-9 col-sm-offset-1'>All Users</h1>

        <div class='row'>
            <div class='col-sm-10 col-sm-offset-1'>
                <table class='table table-striped table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>created_at</th>
                            <th>user_level</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php  
                        foreach($userquery as $user) {
                ?>     
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><a href='/normaldashboard/view_wall/<?= $user['id'] ?>'><?= $user['first_name'] . " " . $user['last_name'] ?></a></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['created_at'] ?></td>
                                <td><?php
                                    if($user['user_level'] == 0) {
                                        echo "normal";
                                    } else echo "admin";
                                ?>

                                </td>
                            </tr>
                <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>