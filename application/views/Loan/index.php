<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  
  <div class="row">
  	<div class="col-7">
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
				      <th>Loan Date</th>
				      <th>Back Date</th>
				      <th>Loan Status</th>
				      <th>Borrower</th>
				      <th>Inventary</th>
				      <th>Ammount</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i = 1;
				  	foreach ($loan as $l) : ?>
					    <tr>
					      <th scope="row"><?= $i++; ?></th>
					      <td><?= $l['tanggal_pinjam']; ?></td>
					      <td><?= $l['tanggal_kembali']; ?></td>
					      <td><?= $l['status_peminjaman']; ?></td>
					      <td><?= $l['id_pegawai']; ?></td>
					      <td><?= $l['id_inventaris']; ?></td>
					      <td><?= $l['jumlah']; ?></td>
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
