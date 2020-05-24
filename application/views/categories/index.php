<div class="container">
	<p class="display-3 text-center"><?= $title; ?></p>
</div>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item text-center"><a href="<?= site_url('/categories/posts/'.$category['id']); ?>" class="lead"><strong><?= $category['name']; ?></strong></a>
		<?php if($this->session->userdata('user_salt') == $category['user_salt']): ?>
			<form class="cat-delete" action="categories/delete/<?= $category['id']; ?>" method="POST">
				<button type="submit" class="btn-link text-danger close">
					<span aria-hidden="true">&times;</span>
				</button>
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>