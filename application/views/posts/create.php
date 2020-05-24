<div class="container">
	<p class="display-3 text-center"><?= $title; ?></p>
</div>

<?php echo validation_errors(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm"></div>
		<div class="col-sm">
    <?php echo form_open_multipart('posts/create'); ?>
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
      </div>
      <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group files color">
        <label>Upload Image</label>
        <input type="file" name="userfile">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
		<div class="col-sm"></div>
	</div>
</div>