<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Disease</h1>
    <?php if ($user['level'] == 1) : ?>
      <a href="<?= base_url('disease/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Disease</a>
    <?php endif; ?>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <?= $this->session->flashdata('message') ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Disease Name</th>
              <?php if ($user['level'] == 1) : ?>
                <th>Action</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($disease as $u) : ?>
              <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['name'] ?></td>
                <?php if ($user['level'] == 1) : ?>
                  <td>
                    <a href="<?= base_url('disease/detail/') . $u['id'] ?>" class="btn btn-warning btn-circle btn-sm">
                      <i class="fas fa-exclamation-triangle"></i>
                    </a>
                    <a href="<?= base_url('disease/edit/') . $u['id'] ?>" class="btn btn-success btn-circle btn-sm">
                      <i class="fas fa-pen"></i>
                    </a>
                    <a href="<?= base_url('disease/delete/') . $u['id'] ?>" onclick="return confirm('Are you sure deleted?')" class="btn btn-danger btn-circle btn-sm">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->