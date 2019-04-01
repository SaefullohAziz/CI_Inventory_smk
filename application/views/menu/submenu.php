<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  
  <div class="row">
  	<div class="col-lg">
  		<?php if (validation_errors()) : ?>
  			<div class="alert alert-danger " role="alert">
  				<?= validation_errors(); ?>		
			</div>
  		<?php endif; ?>
  		<?= $this->session->flashdata('message'); ?>
  		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
	              Table Submenu Management 
	              <a href="" class="btn btn-sm btn-primary ml-4" data-toggle="modal" data-target="#addNewSubmenu">+</a>
	          </h6>
            </div>
            <div class="card-body">
		  		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Title</th>
				      <th>Menu</th>
				      <th>Url</th>
				      <th>Icon</th>
				      <th>Active</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php 
				  	$i = 1;
				  	foreach ($subMenu as $sm) : 
				  		?>
					    <tr>
					      <th scope="row"><?= $i++; ?></th>
					      <td><?= $sm['title']; ?></td>
					      <td><?= $sm['menu']; ?></td>
					      <td><?= $sm['url']; ?></td>
					      <td><i class="<?= $sm['icon']; ?>"></i></td>
					      <td><?= $sm['is_active']; ?></td>
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
	<div class="modal fade" id="addNewSubmenu" tabindex="-1" role="dialog" aria-labelledby="addNewSubmenu" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addNewSubmenu">Add New Submenu</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="<?= base_url('Menu/submenu'); ?>" method="post">
	        	
	        	<div class="form-group">
				    <input type="text" class="form-control" name="title" id="title" placeholder="Submenu Name" autofocus>
			    </div>
			    <div class="form-group">
			    	<select name="menu_id" id="menu_id" class="form-control">
			    		<option value="">Select Menu</option>
			    			<?php foreach ($menu as $m) : ?>
			    		<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
			    		<?php endforeach; ?>
			    	</select>
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="url" id="url" placeholder="Submenu Url" autofocus>
			    </div>
			    <div class="form-group">
				    <input type="text" class="form-control" name="icon" id="icon" placeholder="Submenu Icon Class" autofocus>
			    </div>
			    <div class="form-check">
				    <label class="form-check-label" for="is_active">
				      <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
				      Active?
				    </label>
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
