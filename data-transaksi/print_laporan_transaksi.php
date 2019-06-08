<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA TRANSAKSI</title>
	<!-- MENYESUAIKAN TAMPILAN WEB -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../logo/logo.png">
	<!-- CSS BOOTSTRAP 4 -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<!-- STYLE CUSTOME-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="bungkus-terluar">
	    <!-- HEADER PAGE CONTENT -->
	    <div id="content" style="width: 100%">
	        <!-- CONTENT TABLE -->
	        <div class="container table-mg-top" style="margin-top: 20px">
				<div class="wrapper-table">
					<h1 class="text-center title-laporan">LAPORAN TRANSAKSI</h1>
					<table id="tb-reservasi" class="table table-striped" cellspacing="0" width="100%">
				        <thead class="thead-red">
				            <tr>
				                <th>#</th>
				                <th>ID</th>
				                <th>Nama Tamu</th>
				                <th>Check In</th>
				                <th>Check Out</th>
				                <th>Tipe Kamar</th>
				                <th>Dewasa</th>
				                <th>Anak-anak</th>
				                <th>Jumlah Pembayaran</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php
					            require '../konek/koneksi.php';
								$sql = "SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC";
								$no=1;
								foreach ($koneksi->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td class="text-nowrap">TR-00<?php echo $row['id_transaksi']; ?></td>
										<td><?php echo $row['nama_tamu']; ?></td>
							    		<td class="text-nowrap"><?php echo $row['checkin']; ?></td>
							    		<td class="text-nowrap"><?php echo $row['checkout']; ?></td>
							    		<td><?php echo $row['tipe_kamar']; ?></td>
							    		<td><?php echo $row['jml_dewasa']; ?></td>
							    		<td><?php echo $row['jml_anak']; ?></td>
							    		<td>Rp. <?php echo $row['total_pembayaran']; ?></td>
							    	</tr>
					    			<?php
					    		$no++;
					    		}
					    	?>
				        </tbody>
				    </table>
				</div>
			</div>
	    </div>
	</div>
	<!-- JS - JQ -->
	<!-- JS LIBRARY GLOBAL -->
	<script type="text/javascript" src="../js/JQuery-3.3.1.min.js"></script>
	<!-- JS LIBRARY BOOTSTRAP 4 -->
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<!-- FUNCTION FOR THIS INDEX -->
	<script type="text/javascript">
		// SCREEN SIZE BROWSER TO ADD/REMOVE CLASS TABLE-RESPONSIVE
		$(window).width(function() { 
			if ($(window).width() <= 1237) {
				$("#tb-reservasi").addClass('table-responsive nowrap');
			}
			else {
				$("#tb-reservasi").removeClass('table-responsive nowrap');
			}
		});
		window.print();
	</script>
</body>
</html>