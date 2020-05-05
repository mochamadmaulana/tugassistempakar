<div class="col-lg-6">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Sing-up!</h1>
            </div>
            <?= $this->session->flashdata('message') ?>
            <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
              <div class="form-group">
                <input type="text" name="fullname" class="form-control form-control-user" placeholder="Fullname" value="<?= set_value('fullname'); ?>">
                <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control form-control-user" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class=" form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" name="password1" class="form-control form-control-user" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" name="password2" class="form-control form-control-user" placeholder="Repeat Password">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Registration Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>