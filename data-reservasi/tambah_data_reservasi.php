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
	$nm_reservasi = $_POST['inp_nm_tamu'];
	$checkin_rsv = $_POST['inp_checkin_reservasi'];
	$checkout_rsv = $_POST['inp_checkout_reservasi'];
	$tp_kamar_rsv = $_POST['inp_tipe_kamar'];
	$jml_dwsa = $_POST['inp_jmldwsa_reservasi'];
	$jml_anak = $_POST['inp_jmlanak_reservasi'];
	//insert data to database
	$sql = "INSERT INTO tb_reservasi (nm_tamu, checkin, checkout, tipe_kmr, jml_dewasa, jml_anak) VALUES (:inp_nm_tamu, :inp_checkin_reservasi, :inp_checkout_reservasi, :inp_tipe_kamar, :inp_jmldwsa_reservasi, :inp_jmlanak_reservasi)";
	$query = $koneksi->prepare($sql);
	$query->bindparam(':inp_nm_tamu', $nm_reservasi);
	$query->bindparam(':inp_checkin_reservasi', $checkin_rsv);
	$query->bindparam(':inp_checkout_reservasi', $checkout_rsv);
	$query->bindparam(':inp_tipe_kamar', $tp_kamar_rsv);
	$query->bindparam(':inp_jmldwsa_reservasi', $jml_dwsa);
	$query->bindparam(':inp_jmlanak_reservasi', $jml_anak);
	$query->execute();
	echo "<script>
		Swal.fire({
		    type: 'success',
			title: '<p>Data baru dengan nama</br><span class=text-success>$nm_reservasi</span></br>Berhasil ditambahkan</p>',
			text: 'Halaman akan di-direct ke index.php dalam 4 detik!',
			showConfirmButton: false,
			timer: 4000,
		}).then(function() {
			window.location.href = 'index_reservasi.php';
		})
	</script>";
?>