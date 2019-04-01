<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  

  <div class="row">
  	<div class="col-lg-8">
  		
  		<?= form_open_multipart('user/edit'); ?>

  			<div class="form-group row">
  				<label for="email" class="col-sm-2 col-form-label">
  					Email
  				</label>
  				<div class="col-sm-10">
  					<input type="text" name="email" id="email" class="form-control"
  					value="<?= $user['email']; ?>" readonly>
  				</div>
  			</div>
  			<div class="form-group row">
  				<label for="name" class="col-sm-2 col-form-label">
  					Full Name
  				</label>
  				<div class="col-sm-10">
  					<input type="text" name="name" id="name" class="form-control"
  					value="<?= $user['nama_petugas']; ?>">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
  				</div>
  			</div>
  			<div class="form-group row">
  				<div class="col-sm-2">
  					
  				</div>
  				<div class="col-sm-10">
  					<div class="row">
  						<div class="col-sm-3">
  							<img src="<?= base_url('assets/img/profile/') . $user['profil']; ?>" class="img-thumbnail">
  						</div>
  						<div class="col-sm-9">
  							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="image" name="image">
							  <label class="custom-file-label" for="image">Choose file</label>
							</div>
  						</div>
  					</div>
  				</div>
  			</div>
			<div class="row justify-content-end">
					<button class="btn btn-primary col-2 mr-3">Edit</button>
			</div>
  			
  		</form>

  	</div>
  </div>

</div>
<!-- /.container-fluid -->
