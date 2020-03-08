<h2><?= $title; ?></h2>

<div class="post-body">
  <?= $body; ?>
</div>

<hr />

<a href="<?= site_url('/posts/edit/'.$post['slug']); ?>" class="btn btn-primary mb-2">Edit</a>

<?= form_open('/posts/delete/'.$post['id']); ?>
  <input type="submit" value="Delete" class="btn btn-danger">
</form>