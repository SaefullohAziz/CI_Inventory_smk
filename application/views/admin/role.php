<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  
  <div class="row">
  	<div class="col-5">
  		<?= form_error('menu', '<div class="alert alert-danger " role="alert">', '</div>'); ?>
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
				      <th>Role</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i = 1;
				  	foreach ($role as $r) : ?>
					    <tr>
					      <th scope="row"><?= $i++; ?></th>
					      <td><?= $role['nama_role']; ?></td>
					      <td>
					      	<a href="<?= base_url('admin/roleaccess/') . $role['id_user_role']; ?>" class="badge badge-warning">access</a>
					      	<a href="" class="badge badge-success">Edit</a>
					      	<a href="" class="badge badge-danger">Delete</a>
					      </td>
					    </tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
  			</div>
  		</div>
  	</div>
  </div>
  


  <!-- Modal -->
	<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="newRoleModal">Add New Role</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="<?= base_url('Admin/role'); ?>" method="post">
	        	
	        	<div class="form-group">
				    <input type="text" class="form-control" name="role" id="role" placeholder="Role Name" autofocus>
			    </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="Submit" class="btn btn-primary">Add</button>

	        </form>

	      </div>
	    </div>
	  </div>
	</div>

</div>
<!-- /.container-fluid -->
