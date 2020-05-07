<h2><?php echo $post['title'] ?></h2>
<small class="post-date">Posted on <?php echo $post['created_at']; ?></small>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
<br>
<div class="container">
	<a href="edit/<?php echo $post['slug'] ?>" class="btn btn-default pull-left">Edit</a>
	<?php echo form_open('posts/delete/'.$post['ID']); ?>
		<input type="submit" class="btn btn-danger pull-right" value="Delete">
	</form>
</div>
