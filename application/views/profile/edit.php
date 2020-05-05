<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit profile</h1>
  <?php echo form_open_multipart('profile/edit'); ?>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="email" class="form-control" id="Email" value="<?= $user['email'] ?>" readonly>
      </div>
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="name" class="form-control" id="Name" value="<?= $user['name'] ?>">
        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="...">
          </div>
          <div class="col-lg-6">
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row ml-5">
          <div class="col-lg">
            <button type="submit" class="btn btn-primary btn-sm border-bottom shadow-lg"><i class="fas fa-edit"></i> Update</button>
            <a href="<?= base_url('profile') ?>" class="btn btn-danger btn-sm border-bottom shadow-lg ml-3"><i class="fas fa-undo-alt"></i> Back</a>
          </div>
        </div>
        <div class="col-lg"></div>
      </div>
    </div>
  </div>
  </form>

</div>
<!-- /.container-fluid -->