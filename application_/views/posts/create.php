<h2><?= $title; ?></h2>

<hr />

<?= validation_errors(); ?>

<div class="row">
  <div class="col-md-8">
    <?= form_open('posts/create'); ?>
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" />
      </div>

      <div class="form-group">
        <label>Body</label>
        <textarea name="body" id="editor1" cols="30" rows="10" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>

    </form>
  </div>
</div>