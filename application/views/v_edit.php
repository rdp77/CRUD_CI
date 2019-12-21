<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" type="text/css"/>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/main/custom.css" type="text/css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/main/icon.png">
	<!-- Data Body -->
	<title>Edit</title>
</head>
<body>
	<?php
		if(!empty($edit)){
			$nbi			= $edit->nbi;
			$tanggal_lahir	= $edit->tanggal_lahir;
			$nama			= $edit->nama;
			$nohp			= $edit->nohp;
			$jenis_kelamin	= $edit->jenis_kelamin;
			$jurusan		= $edit->jurusan;
			$fakultas 		= $edit->fakultas;
			$alamat			= $edit->alamat;
			$motivasi 		= $edit->motivasi;
			?>
	<h2>Edit Data</h2>
	<!-- Form -->
<form method="post" action="<?php echo site_url('edit/save') ?>">
		<div class="container">
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="NBI" name="nbi" value="<?php echo $nbi; ?>" readonly>
			</div>
			<div class="form-group col-md-6">
                <input placeholder="Tanggal lahir" type="text" class="datepicker form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" readonly required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama; ?>" required>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="No. Handphone" name="nohp" value="<?php echo $nohp; ?>" maxlength="12" onkeypress="return hanyaAngka(event)" required>
			</div>
		</div>	
		<div class="form-row">
			<div class="form-group col-md-6">
				<select id="JenisKelamin" class="form-control" name="jenis_kelamin">
					<option selected>Jenis Kelamin</option>
					<option value="L" <?php if($jenis_kelamin == "L"){echo "selected";} ?>>Laki-Laki</option>
					<option value="P" <?php if($jenis_kelamin == "P"){echo "selected";} ?>>Perempuan</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="<?php echo $jurusan; ?>" required>
					<input type="text" class="form-control" placeholder="Fakultas/Prodi" name="fakultas" value="<?php echo $fakultas; ?>" required>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>" required>
			</div>
			<div class="form-group col-md-6">
				<input type="text" class="form-control" placeholder="Motivasi Mengikuti UKM" name="motivasi" value="<?php echo $motivasi; ?>" required>
			</div>
		</div>
		</div>
		<!-- Button -->
		<div class="container text-center">
			<div class="row justify-content-md-center">
				<div class="col col-md-2 text-right">
					<a href="<?php echo site_url('cek'); ?>" class="btn btn-primary btn-lg">Kembali</a>
				</div>
				<div class="col col-md-2 text-left">
					<button type="submit" class="btn btn-primary btn-lg">Update</button>
				</div>
			</div>
		</div>
	</form>
	<?php
	}else{
		?>
		<h3>Data tidak ditemukan.</h3>
		<?php
	}?>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>assets/main/jquery.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/main/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
	<script type="text/javascript">
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		};
  $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
 });
	</script>
</body>
</html>