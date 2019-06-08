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
	$id = $_GET['id_reservasi'];
	$nm_reservasi = $_POST['updt_nm_tamu'];
	$checkin_rsv = $_POST['updt_checkin_reservasi'];
	$checkout_rsv = $_POST['updt_checkout_reservasi'];
	$tp_kamar = $_POST['updt_tipe_kamar'];
	$jml_dwsa = $_POST['updt_jmldwsa_reservasi'];
	$jml_anak = $_POST['updt_jmlanak_reservasi'];	
	//update data to database	
	$sql = "UPDATE tb_reservasi SET nm_tamu = '$nm_reservasi', checkin = '$checkin_rsv', checkout = '$checkout_rsv', tipe_kmr = '$tp_kamar', jml_dewasa = '$jml_dwsa', jml_anak = '$jml_anak' WHERE id_reservasi = '$id'";
	$koneksi->exec($sql);
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data dengan ID <span class=text-success>T-00$id</span> telah berhasil diubah !</p>',
			text: 'Halaman akan di-direct ke index dalam 3 detik!',
			showConfirmButton: false,
			timer: 3000
		}).then(function() {
			window.location.href = 'index_reservasi.php';
		})
	</script>";
?>