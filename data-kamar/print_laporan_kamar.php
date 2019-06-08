<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA KAMAR</title>
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
					<h1 class="text-center title-laporan">LAPORAN TIPE KAMAR</h1>
					<table id="tb-kamar" class="table table-striped text-nowrap" cellspacing="0" width="100%">
				        <thead class="thead-green">
				            <tr>
				                <th>#</th>
				                <th>ID</th>
				                <th>Tipe Kamar</th>
				                <th>Harga Kamar</th>
				                <th>Keterangan</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php
					            require '../konek/koneksi.php';
								$sql = "SELECT * FROM tb_tipe_kamar";
								$no=1;
								foreach ($koneksi->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td>K-0<?php echo $row['id_tipe_kamar']; ?></td>
										<td><?php echo $row['tipe_kamar']; ?></td>
							    		<td><?php echo $row['harga_kamar']; ?></td>
							    		<td><?php echo $row['keterangan']; ?></td>
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
			if ($(window).width() <= 500) {
				$("#tb-kamar").addClass('table-responsive text-nowrap');
			}
			else {
				$("#tb-kamar").removeClass('table-responsive text-nowrap');
			}
		});
		window.print();
	</script>
</body>
</html>