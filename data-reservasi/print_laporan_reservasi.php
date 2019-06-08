<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA RESERVASI</title>
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
	    <div id="content" style="width: 100%;">
	        <!-- CONTENT TABLE -->
	        <div class="container table-mg-top" style=" margin-top: 20px">
				<div class="wrapper-table">
					<h1 class="text-center title-laporan">LAPORAN RESERVASI</h1>
					<table id="tb-reservasi" class="table table-striped nowrap" cellspacing="0" width="100%">
				        <thead class="thead-blue">
				            <tr>
				                <th>#</th>
				                <th>ID</th>
				                <th>Nama Tamu</th>
				                <th>Check In</th>
				                <th>Check Out</th>
				                <th>Tipe Kamar</th>
				                <th>Dewasa</th>
				                <th>Anak-anak</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php
					            require '../konek/koneksi.php';
								$sql = "SELECT * FROM tb_reservasi ORDER BY id_reservasi DESC";
								$no=1;
								foreach ($koneksi->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td>RSV-00<?php echo $row['id_reservasi']; ?></td>
										<td><?php echo $row['nm_tamu']; ?></td>
							    		<td><?php echo $row['checkin']; ?></td>
							    		<td><?php echo $row['checkout']; ?></td>
							    		<td><?php echo $row['tipe_kmr']; ?></td>
							    		<td><?php echo $row['jml_dewasa']; ?></td>
							    		<td><?php echo $row['jml_anak']; ?></td>
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
			if ($(window).width() <= 768) {
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