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
	<style type="text/css">
		body {
			padding: 0em 5em;
		}
	</style>
</head>
<body>
	<div id='container'>
		<div id='nav'>
			<div class='row'>
				<a href="">Test App</a>
		<?php
				if ($this->session->userdata('admin') == 'admin') {
        ?>
            <a href='/admindashboard/index'>Dashboard</a>
        <?php
            } else {
        ?>
            <a href='/normaldashboard/index'>Dashboard</a>
        <?php
            }
        ?>
				<a href="/normaldashboard/editprofile">Profile</a>
				<a href="/normaldashboard/view_wall/<?=$this->session->userdata("userid")?>">Wall</a>
				<a href="/signins/logoff">Log off</a>
			</div>
		</div>
		<h2><?=$user_info['first_name']?> <?=$user_info['last_name']?></h2>
		<p>Registered at: <?=$user_info['created_at']?></p>
		<p>Email address: <?=$user_info['email']?></p>
		<p>Description: <?=$user_info['description']?></p>
		<h2>Leave a message for <?=$user_info['first_name']?></h2>
		<form action='/walls/new_message' method='post'>
			<input type='hidden' name='recipient_id' value = '<?=$user_info['id']?>'>
			<textarea class='form-control' rows='3' name='message'></textarea>
			<input class = 'btn btn-success' type='submit' value = 'Post'>
		</form>
		<?php foreach ($messages as $message) { ?>
		<p><a href='/normaldashboard/view_wall/<?=$message["user_id"]?>'><?= $message['first_name']?> <?= $message['last_name']?></a> wrote: </p>
		<p><?php echo timespan(human_to_unix($message['created_at']), time())?> ago</p>
		<div><?=$message['message']?></div>
			<?php foreach ($comments as $comment) { ?>
			<?php if ($message['id']==$comment['message_id']) { ?>
			<p><a href='/normaldashboard/view_wall/<?=$comment["user_id"]?>'><?= $comment['name']?></a> wrote: </p>
			<p><?php echo timespan(human_to_unix($comment['created_at']), time())?> ago</p>
			<div><?= $comment['comment']?></div>
			<?php } } ?>
			<form action='/walls/new_comment' method='post'>
				<input type='hidden' name='recipient_id' value = '<?=$user_info['id']?>'>
				<input type='hidden' name='message_id' value = '<?=$message["id"]?>'>
				<textarea class='form-control' rows='3' name='comment' placeholder='Leave a comment'></textarea>
				<input class = 'btn btn-success' type='submit' value = 'Post'>
			</form>
		<?php } ?>
	</div>

</body>
</html>