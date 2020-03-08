<?= $title; ?>

<hr />

<?php foreach($posts as $post) : ?>
  <h3><?= $post['title']; ?></h3>

  <small class="post-date">
    <?= $post['created_at']; ?>
  </small>

  <?= word_limiter($post['body'], 15); ?>

  <p class="mt-3">
    <a 
      class="btn btn-sm btn-info"
      href="<?= site_url('/posts/'.$post['slug']); ?>">
      Read More
    </a>
  </p>

<?php endforeach; ?>