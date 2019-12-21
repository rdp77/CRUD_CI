<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/bootstrap.min.css" type="text/css">
  	<!-- Custom CSS -->
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/custom.css" type="text/css">
  	<!-- Font Awesome CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    crossorigin="anonymous">
  	<!-- Favicon -->
  	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/main/icon.png">
  	<!-- Data Body -->
  	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa Yang Terdaftar</h1>
	  <!-- Seacrh -->
	  <form action="<?php echo site_url('cek') ?>" method="post">
	  <div class="input-group mb-3 container">
	    <input type="text" class="form-control" placeholder="Cari mahasiswa berdasarkan NBI" name="nbi">
	    <div class="input-group-append">
	      <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
	    </div>
	  </div>
	</form>
  <!-- Data Table -->
  <div class="vertical-scroll">
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NBI</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      	<?php $no = 1; foreach ($getAll as $key): ?>
        <tr>
          <th scope="row"><?php echo $no++ ?></th>
          <td><?php echo $key->nbi; ?></td>
          <td><?php echo $key->nama; ?></td>
          <td><?php echo $key->jurusan; ?></td>
          <td>
          	<a href="<?php echo site_url('edit/index/'.$key->nbi) ?>" class="btn btn-success" title="Edit"><i class="fas fa-pencil-alt"></i></a>
          	<button type="button" data-id="<?php echo site_url('delete/index/'.$key->nbi) ?>" class="btn btn-danger" title="Hapus" data-toggle="modal" data-target="#popup_<?php echo $no; ?>"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
<!-- Modal -->
<div class="modal fade" id="popup_<?php echo $no; ?>" data-backdrop="static" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yakin ingin menghapus data <?php echo $key->nama; ?> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="<?php echo site_url('delete/index/'.$key->nbi) ?>" class="btn btn-danger">Tetap Hapus</a>
      </div>
    </div>
  </div>
</div>  
<!-- END Modal -->
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <!-- Button -->
  <div class="custombtn">
    <a href="<?php echo site_url() ?>" class="btn btn-primary btn-lg">Kembali</a>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>assets/main/jquery.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/main/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
  </script>
</body>
</html>