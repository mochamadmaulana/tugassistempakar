<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Check Up</h1>
  <div class="row text-center">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="card border-success mb-3">
        <div class="card-header text-white bg-success"><b>Jawablah pertanyaan ini dengan jujur dan benar </b></div>
        <div class="card-body">
          <form action="<?= base_url('check_up/respons') ?>" method="post">
            <?php foreach ($symptoms as $d) : ?>
              <h5 class="card-title"><?= $d['name'] ?></h5>
              <?php if ($d['name'] == 'Pusing') : ?>
              <?php endif; ?>
            <?php endforeach; ?>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline1">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Tidak</label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->