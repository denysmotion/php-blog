<?php require VIEWS . '/incs/header.php' ?>

  <main class="main py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1>New post</h1>
            <form method="post">
                <div class="mb-3">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="<?= old('title') ?>">
                    <?php if (isset($errors['title'])): ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['title'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <textarea name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Excerpt" rows="2"><?= old('excerpt') ?></textarea>
                    <?php if (isset($errors['excerpt'])): ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['excerpt'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <textarea name="content" type="text" class="form-control" id="content" placeholder="Content" rows="6"><?= old('content') ?></textarea>
                    <?php if (isset($errors['content'])): ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['content'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                </form>
        </div>
      </div>
    </div>
  </main>

<?php require VIEWS . '/incs/footer.php' ?>