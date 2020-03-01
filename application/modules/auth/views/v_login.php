<?= $this->session->flashdata('message'); ?>

<form method="post" action="<?= site_url('auth') ?>">

  <div class=" form-group">
    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email...">
    <!-- form validation -->
    <?php if (form_error('email')) : ?>
      <small class="text-danger"><?= form_error('email') ?></small>
    <?php else : ?> <?php endif; ?>
    <!-- end Form validation -->
  </div>

  <div class="form-group mb-4">
    <input type="password" class="form-control" name="password" placeholder="Enter your Password...">
    <!-- form validation -->
    <?php if (form_error('password')) : ?>
      <small class="text-danger"><?= form_error('password') ?></small>
    <?php else : ?> <?php endif; ?>
    <!-- end Form validation -->
  </div>

  <!-- button submit -->
  <input type="submit" class="btn btn-dark btn-md mx-auto btn-block rounded-10" value="Submit">
  <!-- end submit -->

</form>