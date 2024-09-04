<?php require VIEWS . '/incs/header.php' ?>

  <main class="main py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1>New post</h1>
            <form method="post">
                <div class="mb-3">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="<?= old('title') ?>">
                    <?= isset($validation) ? $validation->list_errors('title') : '' ?>
                </div>
                <div class="mb-3">
                    <textarea name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Excerpt" rows="2"><?= old('excerpt') ?></textarea>
                    <?= isset($validation) ? $validation->list_errors('excerpt') : '' ?>
                </div>
                <div class="mb-3">
                    <textarea name="content" type="text" class="form-control" id="content" placeholder="Content" rows="6"><?= old('content') ?></textarea>
                    <?= isset($validation) ? $validation->list_errors('content') : '' ?>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                </form>
        </div>
      </div>
    </div>
  </main>

<?php require VIEWS . '/incs/footer.php' ?>