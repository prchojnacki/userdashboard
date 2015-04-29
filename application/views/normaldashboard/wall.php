<?php $this->load->helper('date');?>
<!DOCTYPE html>
<html>
<head>
    <title>Wall</title>
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
        <?php
			if ($this->session->userdata('admin') == 'admin') {
        ?>
            <li><a href='/admindashboard/index'>Dashboard</a></li>
        <?php
            } else {
        ?>
            <li><a href='/normaldashboard/index'>Dashboard</a></li>
        <?php
            }
        ?>
            <li><a href="/normaldashboard/editprofile">Account</a></li>
            <li><a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a></li>
        </ul>
        <ul class='nav navbar-nav navbar-right'>
            <li><a href="/signins/logoff">Log off</a></li>
        </ul>
    </div>
    </nav>

	<div class='container'>
		<h2><?=$user_info['first_name']?> <?=$user_info['last_name']?></h2>
		<p>Registered on: <?php echo mdate('%F %d%S %Y', human_to_unix($user_info['created_at']));?></p>
		<p>Email address: <?=$user_info['email']?></p>
		<p>Description: <?=$user_info['description']?></p>
		<h2>Leave a message for <?=$user_info['first_name']?></h2>
		<div class='row'>
			<form action='/walls/new_message' method='post'>
				<div class='form-group'>
					<input type='hidden' name='recipient_id' value = '<?=$user_info['id']?>'>
					<div class='col-sm-9'>
						<textarea class='form-control' rows='4' name='message'></textarea>
					</div>
					<div class='col-sm-3 col-sm-offset-8'>
						<input class = 'btn btn-success' type='submit' value = 'Post'>
					</div>
				</div>
			</form>
		</div>
		<?php foreach ($messages as $message) { ?>
		<div class='message_box row'>
			<p class='col-md-8'><a href='/normaldashboard/view_wall/<?=$message["user_id"]?>'><?= $message['first_name']?> <?= $message['last_name']?></a> wrote: </p>
			<p class='col-md-4'><?php echo timespan(human_to_unix($message['created_at']), time())?> ago</p>
		</div>
		<div class='message'>
			<?=$message['message']?>
		</div>
		<?php foreach ($comments as $comment) { ?>
		<?php if ($message['id']==$comment['message_id']) { ?>
		<div class='comment_box'>
			<div class='row'>
				<p class='col-md-8'><a href='/normaldashboard/view_wall/<?=$comment["user_id"]?>'><?= $comment['name']?></a> wrote: </p>
				<p class='col-md-4'><?php echo timespan(human_to_unix($comment['created_at']), time())?> ago</p>
			</div>
			<div class='comment'>
				<?= $comment['comment']?>
			</div>
		</div>
		<?php } } ?>
		<div class='row'>
			<form action='/walls/new_comment' method='post'>
				<input type='hidden' name='recipient_id' value = '<?=$user_info['id']?>'>
				<input type='hidden' name='message_id' value = '<?=$message["id"]?>'>
				<div class='col-sm-9 col-sm-offset-1'>
					<textarea class='form-control' rows='4' name='comment' placeholder='Leave a comment'></textarea>
				</div>
				<div class='col-sm-3 col-sm-offset-9'>
					<input class = 'btn btn-success' type='submit' value = 'Post'>
				</div>
			</form>
		</div>
		<?php } ?>
	</div>

</body>
</html>