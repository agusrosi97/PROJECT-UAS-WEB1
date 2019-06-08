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
	$type_kamar = $_POST['updt_tp_kamar'];
	$hrg_kamar = $_POST['updt_harga_kamar'];
	$ket_kamar = $_POST['updt_keterangan'];
	//update data to database	
	$sql = "UPDATE tb_tipe_kamar SET tipe_kamar = '$type_kamar', harga_kamar = '$hrg_kamar', keterangan = '$ket_kamar' WHERE id_tipe_kamar = '$id'";
	$koneksi->exec($sql);
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data dengan ID <span class=text-success>K-0$id</span> telah berhasil diubah !</p>',
			text: 'Halaman akan di-direct ke index dalam 3 detik!',
			showConfirmButton: false,
			timer: 3000
		}).then(function() {
			window.location.href = 'index_kamar.php';
		})
	</script>";
?>