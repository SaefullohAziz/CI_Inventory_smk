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
	              Table Menu Management 
	              <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newMenuModal">+</a>
	          </h6>
            </div>
            <div class="card-body">
		  		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Menu</th>
				      <th>Action</th>
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
	<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="newMenuModal">Add New Menu</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="<?= base_url('Menu/index'); ?>" method="post">
	        	
	        	<div class="form-group">
				    <input type="text" class="form-control" name="menu" id="menu" placeholder="Menu Name" autofocus>
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
