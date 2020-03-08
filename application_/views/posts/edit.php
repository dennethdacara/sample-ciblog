<h2><?= $page_title; ?></h2>

<hr />

<?php echo validation_errors(); ?>

<div class="row">
  <div class="col-md-8">
    <?= form_open('posts/update'); ?>
      <input type="hidden" name="id" value="<?= $post['id']; ?>">

      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?= $post['title']; ?>" />
      </div>

      <div class="form-group">
        <label>Body</label>
        <textarea name="body" id="editor1" cols="30" rows="10" class="form-control"><?= $post['body']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-success">Update</button>

    </form>
  </div>
</div>