<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>
  

  <!-- Divider -->
  <div class="card mb-3 col-lg-7">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['profil']; ?>" class="card-img">
      </div>
      <div class="colmd-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['nama_petugas']; ?></h5>
          <p class="card-text"><?= $user['email']; ?></p>
        </div>
      </div>
    </div>
  </div>

  

</div>
<!-- /.container-fluid -->
