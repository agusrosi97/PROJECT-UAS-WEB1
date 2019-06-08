<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../logo/logo.png">
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
	$tipe_kamar = $_POST['inp_tp_kamar'];
	$harga_kamar = $_POST['inp_harga_kamar'];
	$ket_kamar = $_POST['inp_keterangan'];
	//insert data to database
	$sql = "INSERT INTO tb_tipe_kamar (tipe_kamar, harga_kamar, keterangan) VALUES (:inp_tp_kamar, :inp_harga_kamar, :inp_keterangan)";
	$query = $koneksi->prepare($sql);
	$query->bindparam(':inp_tp_kamar', $tipe_kamar);
	$query->bindparam(':inp_harga_kamar', $harga_kamar);
	$query->bindparam(':inp_keterangan', $ket_kamar);
	$query->execute();
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Tipe kamar <span class=text-success>$tipe_kamar</span></br>berhasil ditambahkan</p>',
			text: 'Halaman akan di-direct ke index.php dalam 4 detik!',
			showConfirmButton: false,
			timer: 4000,
		}).then(function() {
			window.location.href = 'index_kamar.php';
		})
	</script>";
?>