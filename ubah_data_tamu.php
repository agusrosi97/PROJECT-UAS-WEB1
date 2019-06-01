<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sweetalert2/css/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
</head>
<body>
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
</body>
</html>
<?php 
require 'koneksi.php';
	$id = $_GET['id_tamu'];
	$nm_tamu = $_POST['updt_nama_tamu'];
	$umr_tamu = $_POST['updt_umur_tamu'];
	$eml_tamu = $_POST['updt_email_tamu'];
	$almt_tamu = $_POST['updt_alamat_tamu'];
	$tlp_tamu = $_POST['updt_notlp_tamu'];	
	//update data to database	
	$sql = "UPDATE tb_tamu SET nama_tamu = '$nm_tamu', umur_tamu = '$umr_tamu', email_tamu = '$eml_tamu', alamat_tamu = '$almt_tamu', notlp_tamu = '$tlp_tamu' WHERE id_tamu = '$id'";
	$koneksi->exec($sql);
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data dengan ID <span class=text-success>T-00$id</span> telah berhasil diubah !</p>',
			text: 'Halaman akan di-direct ke index dalam 3 detik!',
			showConfirmButton: false,
			timer: 3000
		}).then(function() {
			window.location.href = 'index_tamu.php';
		})
	</script>";
?>