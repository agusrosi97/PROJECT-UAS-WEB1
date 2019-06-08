<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../sweetalert2/css/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title></title>
</head>
<body>
	<script type="text/javascript" src="../js/JQuery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../sweetalert2/js/sweetalert2.js"></script>
</body>
</html>
<?php 
require '../konek/koneksi.php';
	$id = $_GET['id_tipe_kamar'];
	$sql = "DELETE FROM tb_tipe_kamar WHERE id_tipe_kamar = '$id'";
	$koneksi->exec($sql);
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data telah dihapus</p>',
			text: 'Halaman akan di-direct ke index dalam 3 detik!',
			showConfirmButton: false,
			timer: 3000
		}).then(function() {
			window.location.href = 'index_kamar.php';
		})
	</script>";
?>