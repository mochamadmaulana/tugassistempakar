<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Disease</h1>
    <?php if ($user['level'] == 1) : ?>
      <a href="<?= base_url('disease') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-undo fa-sm text-white-50"></i> Back</a>
    <?php endif; ?>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="card border-warning mb-3">
        <div class="card-header text-white bg-warning"><b><?= $disease['name']; ?></b></div>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer text-white bg-warning">Symptoms :</div>
        <ul class="list-group list-group-flush">
          <?php foreach ($diagnosis as $d) : ?>
            <li class="list-group-item">- <?= $d['s_name'] ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>