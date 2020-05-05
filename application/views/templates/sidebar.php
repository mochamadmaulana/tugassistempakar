<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
      <div class="sidebar-brand-icon">
        <i class="fas fa-laptop-medical"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Sistem Pakar</div>
    </a>

    <?php if ($user['level'] == 1) : ?>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Management user -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('management') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Management User</span></a>
      </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

    <!-- Nav Item - news -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('news') ?>">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>News</span></a>
    </li>

    <!-- Nav Item - Check up -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('check_up') ?>">
        <i class="fas fa-fw fa-notes-medical"></i>
        <span>Check Up</span></a>
    </li>

    <!-- Nav Item - List disease -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('disease') ?>">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>List Disease</span></a>
    </li>

    <!-- Nav Item - report -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('report') ?>">
        <i class="fas fa-fw fa-chart-bar"></i>
        <span>Report</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout') ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->