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
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php echo validation_errors('<p class="error">');?>
			<?php echo form_open("register/adduser");?>
			<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" class="form-control"id="username" name="username" />
			</div>

			<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="text" class="form-control"id="email" name="email" />
			</div>

			<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control"id="password" name="password" />
			</div>

			<div class="form-group">
			<label for="verifypassword">Re-type Password:</label>
			<input type="password" class="form-control"id="verifypassword" name="verifypassword" />
			</div>

			<div class="form-group">
			<input type="submit" class="btn btn-default" value="REGISTER">
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>