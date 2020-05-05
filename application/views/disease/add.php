<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Add Disease</h1>
    <?php if ($user['level'] == 1) : ?>
      <a href="<?= base_url('disease') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
    <?php endif; ?>
  </div>

  <form action="<?= base_url('disease/add') ?>" method="post">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="name">Name</label>
          <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          <input type="text" name="name" id="name" class="form-control" autocomplete="off" placeholder="Disease name" value="<?= set_value('name'); ?>">
        </div>
        <button type="reset" class="btn btn-secondary btn-sm"><i class="fas fa-plus fa-sm"></i> Reset</button>
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-plus fa-sm"></i> Add</button>
      </div>
    </div>
  </form>
</div>