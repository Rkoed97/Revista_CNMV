<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['ID']; ?>">
  	<div class="form-group">
    	<label>Title</label>
    	<input type="text" class="form-control" name="title" placeholder="Add title" value="<?php echo $post['title'] ?>">
  	</div>
  	<div class="form-group">
    	<label>Body</label>
    	<textarea id="bodyeditor" class="form-control" name="body" placeholder="Add Body" rows="4"><?php echo $post['body'] ?></textarea>
  	</div>
  	<div class="form-group">
    	<input type="file" name=file>
    	<label>Upload pdf</label>
 	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>