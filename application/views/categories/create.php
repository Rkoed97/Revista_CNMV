<div class="container">
	<p class="display-3 text-center"><?= $title; ?></p>
</div>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>