<div class="container">
	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm">
		<?php echo form_open('users/login', array('class'=>'text-center')); ?>
			<div class="container">
				<p class="display-3 text-center"><?= $title; ?></p>
			</div>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		<?php echo form_close(); ?>
		</div>
		<div class="col-sm"></div>
	</div>
</div>