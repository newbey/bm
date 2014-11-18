<div class="container">
	<div class="row">
		<!--<div class="col-md-4 col-md-offset-4 errmsg"> -->
		<?php echo validation_errors('<p class="col-md-4 col-md-offset-4 error">');?>
		</div>
		<div class="col-md-4 col-md-offset-4 register">
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
			<input type="submit" class="btn btn-primary regbutton" value="REGISTER">
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
