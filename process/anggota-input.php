<?php
include'../connect.php';


$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Cadangan";
	
if(isset($_POST['simpan'])){
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementara dan nama file dari form
			$lokasi_file 	= $_FILES['foto']['tmp_name'];
			$tipe_file 		= pathinfo($nama_file, PATHINFO_EXTENSION);
			$file_foto 		= $id_anggota.".".$tipe_file;

			// Tentukan folder untuk menyimpan file
			$folder 		= "../images/$file_foto";
			// Apabila file berhasil di upload
			move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto="-";
	
			mysqli_query($db,
			"INSERT INTO `tbanggota`(`nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$status', '$file_foto')"
			);

	header("location:../anggota.php");
}
?>