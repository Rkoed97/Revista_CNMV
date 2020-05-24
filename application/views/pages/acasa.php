<div class="container">
	<p class="display-3 text-center"><?= $title; ?></p>
	<p class="h4 text-muted text-center">Revista Colegiului National "Mihai Viteazul"</p>
</div>

<p class="display-4">Ultima editie:</p>
<hr>
<h3><?= $post->title; ?></h3>
<div class="row container-fluid">
	<div class="col-lg-3">
		<img class="post-thumb" src="<?= base_url(); ?>assets/images/posts/noimage.jpg">
	</div>
	<div class="col-lg-9">
		<small class="post-date">Posted on: <?= $post->created_at; ?> in <strong><?= $post->name; ?></strong></small><br>
	<?= word_limiter($post->body, 60); ?>
	<br><br>
	<p><a class="btn btn-default" href="<?= site_url('/posts/'.$post->slug); ?>">Read More</a></p>
	</div>
</div>
<hr>