<?php
include'connect.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sistem Pendaftaran Siswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/30/30915.png" type="image/icon type">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

		<link rel="stylesheet" href="sidebar/css/style.css">
  </head>
  <body>
		
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.php" class="logo">
          <img src="https://cdn-icons-png.flaticon.com/512/30/30915.png"
                style="width:60%">
        </a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="addanggota.php"><span class="bi bi-card-checklist"></span>PSB</a>
          </li>
          <li>
              <a href="anggota.php"><span class="fa fa-user"></span>Siswa</a>
          </li>
          <li>
            <a href="#"><span></span><br/><br/><br/></a>
          </li>
          <li>
            <a href="logout.php"><span><i class="bi bi-box-arrow-left"></i></span>Logout</a>
          </li>
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        <div class="footer">
          <p style="font-weight: bolder;">Sistem Pendaftaran Siswa Baru (PSB)</p>
          <br />
          <br />
        	<p>SMA 1 PAGI</p>
          <p>Jl. Lembah Abang No 11,</p>
          <p>Telp: (021)55555555</p>
        </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Hai <?php echo$_SESSION['sesi']; ?>!</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="addanggota.php">PENDAFTARAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/dindafatimahk/" target="_blank">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        
<h1>Pendaftaran Siswa Baru</h1>

<div class="content">

<form action="process/anggota-input.php" method="POST" enctype="multipart/form-data" class="was-validated">

<tr>
  <div class="col-auto">
<div>
  <label class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Foto</label>
  <br />
  <br />
  <input type="file" name="foto" ></input>
  </div>
    <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Nama</label>
    <input type="text" class="form-control is-invalid" id="validationTextarea" name="nama" placeholder="Nama" required></input>
    <div class="invalid-feedback">
    Nama tidak boleh kosong.
    </div>
    <br />
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Jenis Kelamin</label>
    <br />
    <br />
    <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="jenis_kelamin" value="Laki-laki" required>
    <label class="form-check-label" for="validationFormCheck3">Laki-laki</label>
  </div>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="jenis_kelamin" value="Perempuan" required>
    <label class="form-check-label" for="validationFormCheck2">Perempuan</label>
  </div>
    <label for="validationTextarea" class="form-label" style="float: left; font-weight: bolder; color: black; font-size: 20px;">Tempat, Tanggal Lahir</label>
    <textarea type="text" class="form-control is-invalid" id="validationTextarea" name="alamat" placeholder="Tempat, Tanggal Lahir" required></textarea>
    <div class="invalid-feedback">
    Tempat, Tanggal Lahir tidak boleh kosong.
    </div>
    <br />
    <div class="mb-3">
    <button name="simpan" value="simpan" class="btn btn-primary" type="submit" onclick = "return confirm ('Apakah Anda Yakin Data Anda Sudah Benar?')">Add</button>
  </div>
  </div>
      </div>
		</div>

    <script src="sidebar/js/jquery.min.js"></script>
    <script src="sidebar/js/popper.js"></script>
    <script src="sidebar/js/bootstrap.min.js"></script>
    <script src="sidebar/js/main.js"></script>


    

  </body>

</html>

<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>