<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="<?php base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<?php echo validation_errors('<p class="error">');?>
	<?php echo form_open("register/adduser");?>
	<p>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" />
	</p>

	<p>
	<label for="email">E-mail:</label>
	<input type="text" id="email" name="email" />
	</p>

	<p>
	<label for="password">Password:</label>
	<input type="password" id="password" name="password" />
	</p>

	<p>
	<label for="verifypassword">Re-type Password:</label>
	<input type="password" id="verifypassword" name="verifypassword" />
	</p>

	<p>
	<input type="submit" value="REGISTER">
	</p>
	<?php echo form_close();?>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>