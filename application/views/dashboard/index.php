<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Check Up</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2">40,000</div>
              <a href="<?= base_url('check_up') ?>" class="btn btn-primary btn-sm">visit</a>
            </div>
            <div class="col-auto">
              <i class="fas fa-notes-medical fa-2x text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">List Disease</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2">215,000</div>
              <a href="<?= base_url('disease') ?>" class="btn btn-success btn-sm">visit</a>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Management Users</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 pb-2">2000</div>
                  <a href="<?= base_url('management') ?>" class="btn btn-info btn-sm">visit</a>
                </div>
                <div class="col">
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Report</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 pb-2">18</div>
              <a href="<?= base_url('report') ?>" class="btn btn-warning btn-sm">visit</a>
            </div>
            <div class="col-auto">
              <i class="fas fa-chart-bar fa-2x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->