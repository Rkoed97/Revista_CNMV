<div class="container">
	<p class="display-4 text-center"><?= $post['title']; ?></p>
</div>
<small class="post-date">Data postarii: <?php echo $post['created_at']; ?></small><a class="btn btn-secondary" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Inapoi</a><br><hr>
<div class="post-body">
	<?php echo $post['body']; ?>
	<br>
	<p class="lead text-muted">Poti vedea revista si <a target="blank" href="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"><abbr title="<?php echo 'Revista CNMV - '.$post['created_at']; ?>">aici</abbr></a>
</div><hr>
<object data="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>#toolbar=0" type="application/pdf" width="100%" height="100%"></object>

<?php if($this->session->userdata('user_salt') == $post['user_salt']): ?>
	<hr>
	<a class="btn btn-default d-inline" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php echo form_open('/posts/delete/'.$post['id'], array('class' => 'd-inline')); ?>
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
<?php endif; ?>