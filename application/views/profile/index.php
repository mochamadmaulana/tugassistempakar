<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    <a href="<?= base_url('profile/edit') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-edit fa-sm text-white-50 pr-2"></i> Edit Profile</a>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message') ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters justify-content-center">
          <div class="col-lg">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $user['name'] ?></h5>
              <p class="card-text"><?= $user['email'] ?></p>
              <p class="card-text"><small class="text-muted">Memeber since <?= date('d F Y', $user['date_create']) ?></small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->