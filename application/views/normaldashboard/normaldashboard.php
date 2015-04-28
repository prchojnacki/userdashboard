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
            <a href='/'>Home</a>
            <a href='/signins/logoff'>Log Off</a>
            <a href='/normaldashboard/editprofile'>Profile</a>
            <a href='/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>'>Wall</a>
        </div>
    </div>
    <h1>All Users</h1>

    <table class='table table-striped'>
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
    <?php
        }
    ?>
        </tbody>
    </table>



</div>
</body>
</html>