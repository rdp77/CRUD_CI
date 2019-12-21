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
	<title>Pendaftaran</title>
</head>
<body>
	<h2>Pendaftaran</h2>
<!-- Form -->
<form method="post" action="<?php echo site_url('daftar/save') ?>">
<div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
		<input type="text" class="form-control" placeholder="NBI" name="nbi" maxlength="10" onkeypress="return hanyaAngka(event)" autofocus required>
    </div>
    <div class="form-group col-md-6">
        <input placeholder="Tanggal lahir" type="text" class="datepicker form-control" name="tanggal_lahir" readonly required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
		<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
    </div>
    <div class="form-group col-md-6">
		<input type="text" class="form-control" placeholder="No. Handphone" name="nohp" maxlength="12" onkeypress="return hanyaAngka(event)" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
		<select id="JenisKelamin" class="form-control" name="jenis_kelamin" required>
			<option selected>Jenis Kelamin</option>
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select>
    </div>
    <div class="form-group col-md-6">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required>
			<input type="text" class="form-control" placeholder="Fakultas" name="fakultas" required>
		</div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
		<input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
    </div>
    <div class="form-group col-md-6">
		<input type="text" class="form-control" placeholder="Motivasi Mengikuti UKM" name="motivasi" required>
    </div>
  </div>
  </div>
		<!-- Button -->
		<div class="container text-center">
			<div class="row justify-content-md-center">
				<div class="col col-md-2 text-right">
					<a href="<?php echo site_url(); ?>" class="btn btn-primary btn-lg">Kembali</a>
				</div>
				<div class="col col-md-2 text-left">
					<button type="submit" class="btn btn-primary btn-lg">Daftar</button>
				</div>
			</div>
		</div>
	</form>
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