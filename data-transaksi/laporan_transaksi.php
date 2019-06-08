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
	<!-- FONT AWESOME 5 -->
	<link rel="stylesheet" href="../fontawesome/css/all.css">
	<!-- STYLE SWEETALERT 2 -->
	<link rel="stylesheet" type="text/css" href="../sweetalert2/css/sweetalert2.css">
	<!-- STYLE CUSTOME-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="bungkus-terluar">
	    <!-- Sidebar -->
	    <sidebar id="sidebar">
	    	<div class="overlay index-img-screen"></div>
	    	<div class="wrapper-img-sidebar">
	    		<img src="../images/IMG-20180918-WA0014.jpg" class="img-sidebar" alt="image-widuri">
			</div>
	        <div class="sidebar-header-transaksi">
	            <h3 class="title-header">Welcome Staf</h3>
            	<div class="dismiss">
            		<button class="btn btn-outline-secondary"><i class="fas fa-angle-left"></i></button>
            	</div>
	        </div>
	        <ul class="list-unstyled components">
	            <p align="center">Master Data</p>
	            <li>
	            	<a href="../dashboard.php" class="icon dashboard-li-icon">Dashboard</a>
	            </li>
	            <li>
	            	<a href="../data-tamu/index_tamu.php" class="icon tamu-li-icon">Tamu</a>
	            </li>
	            <li>
	            	<a href="../data-reservasi/index_reservasi.php" class="icon reservasi-li-icon">Reservasi</a>
	            </li>
	            <li>
	            	<a href="../data-kamar/index_kamar.php" class="icon tipeKamar-li-icon">Tipe Kamar</a>
	            </li>
	            <li class="break-li">
	            	<a href="index_transaksi.php" class="icon transaksi-li-icon">Transaksi Pembayaran</a>
	            </li>
	            <li>
	            	<a href="../dashboard.php#laporan-master" class="icon laporan-li-icon"><strong>LAPORAN</strong></a>
	            </li>
	            <div class="bungkus-bt-logout">
	            	<button id="bt-logout" class="btn btn-outline-danger bt-logout" title="logout" onclick="btnLogout()">Logout<i class="fas fa-sign-out-alt"></i></button>
	            </div>
	        </ul>
	        <div class="personal-info">
		        <div class="container info">
		        	<div class="row text-center col-xl-12 content-personal-info">
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="Gus Rosi Adi">
		        			<a href="https://web.facebook.com/agusrosi97" target="_blank">
		        				<i class="fab fa-facebook-f"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="gusrosi_">
		        			<a href="https://www.instagram.com/gusrosi_" target="_blank">
		        				<i class="fab fa-instagram"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="081236573724">
		        			<a href="https://web.whatsapp.com/" target="_blank">
		        				<i class="fab fa-whatsapp"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="agusrosi97">
		        			<a href="https://github.com/agusrosi97" target="_blank">
		        				<i class="fab fa-github"></i>
		        			</a>
		        		</div>
		        	</div>
		        </div>
	        </div>
	    </sidebar>
	    <!-- HEADER PAGE CONTENT -->
	    <div id="content">
	        <nav class="navbar navbar-expand-lg navbar-light bg-light">
	            <div class="container-fluid">
	                <i id="btn-sidebar-toggle" class="fas fa-bars" title="Show/hide sidebar"></i>
	                <h1 class="h1-title-header-transaksi">DATA TRANSAKSI</h1>
	                <button class="btn btn-outline-danger btn-header-logout" title="Logout" onclick="btnLogout()">Logout<i class="fas fa-sign-out-alt"></i>
	                </button>
	            </div>
	        </nav>
	        <!-- CONTENT TABLE -->
	        <div class="container table-mg-top">
				<div class="wrapper-table">
					<div class="bungkus-bt-new">
						<button class="btn btn-primary" onclick="window.open('print_laporan_transaksi.php')">PRINT</button>
	        		</div>
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
				<div class="notice">Note : <span class="text-danger"><b>Refresh the browser</b></span> if you resize it!</div>
			</div>
			<div class="footer">
				<i class="far fa-copyright"></i><span class="year"> 2019</span><span class="y"></span><span class="dev-name font-weight-bold"><a href="https://github.com/agusrosi97" target="_blank">Agus Rosi Adi Purwibawa - <i class="fab fa-github fork"></i></a></span>
			</div>
	    </div>
	</div>
	<!-- JS - JQ -->
	<!-- JS LIBRARY GLOBAL -->
	<script type="text/javascript" src="../js/JQuery-3.3.1.min.js"></script>
	<!-- JS LIBRARY SWEETALERT -->
	<script type="text/javascript" src="../sweetalert2/js/sweetalert2.js"></script>
	<!-- JS LIBRARY FONT AWESOME 5 -->
	<script type="text/javascript" src="../fontawesome/js/all.js"></script>
	<!-- JS LIBRARY HOVER POPPER -->
	<script type="text/javascript" src="../js/Popper.js"></script>
	<!-- JS LIBRARY BOOTSTRAP 4 -->
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<!-- FUNCTION FOR THIS INDEX -->
	<script type="text/javascript">
		//TOGGLE SIDEBAR, H1 WIDTH, BTN LOGOUT
		$(document).ready(function () {
		    $('#btn-sidebar-toggle').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.h1-title-header-transaksi').toggleClass('increase-width');
                $('.btn-header-logout').toggleClass('hide-btn');
            })
		});
		$(document).ready(function () {
			$('.dismiss').on('click', function () {
				$('#sidebar, #content').removeClass('active');
			})
		});
		//TOOLTIP EVERYWHERE
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});
		//FUNCTION LOGOUT - BUTTON - SWEETALERT
		function btnLogout() {
			Swal.fire({
				title: "Anda yakin ingin keluar dari sistem?",
				type: "question",
				confirmButtonColor: "#d33",
				cancelButtonColor: "#007bff",
				confirmButtonText: "IYA ! <i class='fas fa-sign-out-alt'></i>",
				cancelButtonText: "BATAL",
				showCancelButton: true
			}).then((result) => {
				if (result.value) {
				    Swal.fire({
				    	title: "Goodbye, see you later!",
				    	type: "success",
				    	showConfirmButton: false,
				    	timer: 2000
				    }).then(function() {
						window.location.href = '../index.php';
					})
				}
			})
		};
		// SCREEN SIZE BROWSER TO ADD/REMOVE CLASS TABLE-RESPONSIVE
		$(window).width(function() { 
			if ($(window).width() <= 1237) {
				$("#tb-reservasi").addClass('table-responsive nowrap');
			}
			else {
				$("#tb-reservasi").removeClass('table-responsive nowrap');
			}
		});
	</script>
</body>
</html>