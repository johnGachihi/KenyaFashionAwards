<?php echo validation_errors(); ?>
<?php echo form_open('login'); ?>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2 class="text-centre"><?= $title; ?></h2>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter Username" name="uname" required autofocus />
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Enter Password" name="passw" required autofocus />
	</div>
	<input type="submit" class="btn btn-primary" value="Log In">
	<input type="reset" class="btn btn-default" value="Cancel">
		</div>
	</div>
</form>