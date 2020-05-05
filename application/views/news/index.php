<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">News</h1>
  <p class="btn btn-danger btn-sm">Live Indonesia</p>
  <div class="row">
    <div class="col-lg">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Positif</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2"><?= $indonesia[0]['positif'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-notes-medical fa-2x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sembuh</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2"><?= $indonesia[0]['sembuh'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-notes-medical fa-2x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Meninggal</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2"><?= $indonesia[0]['meninggal'] ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-notes-medical fa-2x text-danger"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card shadow mt-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Provinsi</th>
              <th>Positif</th>
              <th>Sembuh</th>
              <th>Meninggal</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($indoProv as $ip) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $ip['attributes']['Provinsi'] ?></td>
                <td><?= $ip['attributes']['Kasus_Posi'] ?></td>
                <td><?= $ip['attributes']['Kasus_Semb'] ?></td>
                <td><?= $ip['attributes']['Kasus_Meni'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->