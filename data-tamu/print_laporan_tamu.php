<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA TAMU</title>
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
					<h1 class="text-center title-laporan">LAPORAN TAMU</h1>
					<table id="tb-tamu" class="table table-striped nowrap" cellspacing="0" width="100%">
				        <thead class="thead-dark">
				            <tr>
				                <th>#</th>
				                <th>ID</th>
				                <th>Nama</th>
				                <th>Umur</th>
				                <th>Email</th>
				                <th>Alamat</th>
				                <th>Telepon</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php
					            require '../konek/koneksi.php';
								$sql = "SELECT * FROM tb_tamu ORDER BY id_tamu DESC";
								$no=1;
								foreach ($koneksi->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td>T-00<?php echo $row['id_tamu']; ?></td>
										<td><?php echo $row['nama_tamu']; ?></td>
							    		<td><?php echo $row['umur_tamu']; ?></td>
							    		<td><?php echo $row['email_tamu']; ?></td>
							    		<td><?php echo $row['alamat_tamu']; ?></td>
							    		<td>+62<?php echo $row['notlp_tamu']; ?></td>
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
	<script type="text/javascript">
		// SCREEN SIZE BROWSER TO ADD/REMOVE CLASS TABLE-RESPONSIVE
		$(window).width(function() {
			if ($(window).width() <= 767) {
				$("#tb-tamu").addClass('table-responsive nowrap');
			}
			else {
				$("#tb-tamu").removeClass('table-responsive nowrap');
			}
		});
		window.print();
	</script>
</body>
</html>