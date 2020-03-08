<?= $title; ?>

<hr />

<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3>

  <small class="post-date">
    <?php echo $post['created_at']; ?>
  </small>

  <?php echo $post['body']; ?>

  <p class="mt-3">
    <a 
      class="btn btn-sm btn-info"
      href="<?php echo site_url('/posts/'.$post['slug']); ?>">
      Read More
    </a>
  </p>

<?php endforeach; ?>