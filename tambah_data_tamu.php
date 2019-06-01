<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="logo/logo.png">
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
	$nm_tamu = $_POST['inp_nama_tamu'];
	$umr_tamu = $_POST['inp_umur_tamu'];
	$eml_tamu = $_POST['inp_email_tamu'];
	$almt_tamu = $_POST['inp_alamat_tamu'];
	$tlp_tamu = $_POST['inp_notlp_tamu'];
	//insert data to database
	$sql = "INSERT INTO tb_tamu (nama_tamu, umur_tamu, email_tamu, alamat_tamu, notlp_tamu) VALUES (:inp_nama_tamu, :inp_umur_tamu, :inp_email_tamu, :inp_alamat_tamu, :inp_notlp_tamu)";
	$query = $koneksi->prepare($sql);
	$query->bindparam(':inp_nama_tamu', $nm_tamu);
	$query->bindparam(':inp_umur_tamu', $umr_tamu);
	$query->bindparam(':inp_email_tamu', $eml_tamu);
	$query->bindparam(':inp_alamat_tamu', $almt_tamu);
	$query->bindparam(':inp_notlp_tamu', $tlp_tamu);
	$query->execute();
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data baru dengan nama</br><span class=text-success>$nm_tamu</span></br>Berhasil ditambahkan</p>',
			text: 'Halaman akan di-direct ke index.php dalam 4 detik!',
			showConfirmButton: false,
			timer: 4000,
		}).then(function() {
			window.location.href = 'index_tamu.php';
		})
	</script>";
?>