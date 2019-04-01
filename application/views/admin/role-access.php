<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <h5>Role: <?= $role['nama_role']; ?></h5>
  <div class="row">
  	<div class="col-5">
  		<?= $this->session->flashdata('message'); ?>
  		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
	              Table <?= $title; ?> 
	              <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newRoleModal">+</a>
	          </h6>
            </div>
            <div class="card-body">
		  		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Menu</th>
				      <th>Access</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i = 1;
				  	foreach ($menu as $m) : ?>
					    <tr>
					      <th scope="row"><?= $i++; ?></th>
					      <td><?= $m['menu']; ?></td>
					      <td>
									<div class="form-check">
							     	<input type="checkbox" class="form-check-input check-role" <?= check_access($role['id_user_role'], $m['id']); ?> data-role="<?= $role['id_user_role']; ?>"
							     	data-menu="<?= $m['id']; ?>">
								  </div>					      	
					      </td>
					    </tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
  			</div>
  		</div>
  	</div>
  </div>

</div>
<!-- /.container-fluid -->
