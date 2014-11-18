<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
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
</body>
</html>