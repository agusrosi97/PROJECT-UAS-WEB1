<?php
	require 'koneksi.php';
	$data = $koneksi->prepare('SELECT * FROM tb_tamu');
	$data->execute();
	$hitung = $data->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- MENYESUAIKAN TAMPILAN WEB -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<!-- CSS BOOTSTRAP 4 -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- FONT AWESOME 5 -->
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<!-- STYLE SWEETALERT 2 -->
	<link rel="stylesheet" type="text/css" href="sweetalert2/css/sweetalert2.css">
	<!-- STYLE CUSTOME-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="bungkus-terluar">
	    <!-- Sidebar -->
	    <nav id="sidebar">
	    	<div class="overlay index-img-screen"></div>
	    	<div class="wrapper-img-sidebar">
	    		<img src="images/IMG-20180918-WA0014.jpg" class="img-sidebar" alt="image-widuri">
			</div>
	        <div class="sidebar-header">
	            <h3 class="title-header">Welcome Staf</h3>
	            	<div class="dismiss">
	            		<button class="btn btn-outline-secondary"><i class="fas fa-angle-left"></i></button>
	            	</div>
	        </div>
	        <ul class="list-unstyled components">
	            <p align="center">Navigasi</p>
	            <li class="active">
	            	<a href="dashboard.php" class="icon dashboard-li-icon">Dashboard</a>
	            </li>
	            <li>
	            	<a href="index_tamu.php" class="icon tamu-li-icon">Tamu</a>
	            </li>
	            <li>
	            	<a href="index_reservasi.php" class="icon reservasi-li-icon">Reservasi</a>
	            </li>
	            <li>
	            	<a href="#" class="icon tipeKamar-li-icon">Tipe Kamar</a>
	            </li>
	            <li class="break-li">
	            	<a href="#" class="icon transaksi-li-icon">Transaksi Pembayaran</a>
	            </li>
	            <div class="bungkus-bt-logout">
	            	<button id="bt-logout" class="btn btn-outline-danger bt-logout" title="logout" onclick="btnLogout()">Logout<i class="fas fa-sign-out-alt"></i></button>
	            </div>
	        </ul>
	        <div class="personal-info">
		        <div class="container info">
		        	<div class="row text-center col-xl-12 content-personal-info">
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="Gus Rosi Adi">
		        			<a href="https://www.facebook.com" target="_blank">
		        				<i class="fab fa-facebook-f"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="gusrosi_">
		        			<a href="https://www.instagram.com" target="_blank">
		        				<i class="fab fa-instagram"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="081236573724">
		        			<a href="https://web.whatsapp.com/" target="_blank">
		        				<i class="fab fa-whatsapp"></i>
		        			</a>
		        		</div>
		        		<div class="col" data-toggle="tooltip" data-placement="top" title="rosiadi97">
		        			<a href="#">
		        				<i class="fab fa-line"></i>
		        			</a>
		        		</div>
		        	</div>
		        </div>
	        </div>
	    </nav>
	    <!-- HEADER PAGE CONTENT -->
	    <div id="content">
	        <nav class="navbar navbar-expand-lg bg-light">
	            <div class="container-fluid">
	                <i id="btn-sidebar-toggle" class="fas fa-bars" title="Show/hide sidebar"></i>
	                <h1 class="h1-title-header-dashboard">DASHBOARD</h1>
	                <button class="btn btn-outline-danger btn-header-logout" title="Logout" onclick="btnLogout()">Logout<i class="fas fa-sign-out-alt"></i>
	                </button>
	            </div>
	        </nav>
	        <!-- CONTENT -->
	        <div class="container index-dashboard">
	        	<!-- Here..... -->
	        	<div class="row">
	        		<div class="col-sm-12 title-dashboard-content">
	        			<p>Master Data & Transaksi</p>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content bg-secondary">
	        				<p class="title-content">Data Tamu</p>
	        				<p class="keterangan">Total: <?php echo "$hitung"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-users"></i></div>
	        				<a href="index_tamu.php" class="content-dashboard-footer foo-1">
	        					<p>Lainnya</p>
	        				</a>
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content bg-primary">
	        				<p class="title-content">Data Reservasi</p>
	        				<p class="keterangan">Total: <?php echo "$hitung"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-calendar-alt"></i></div>
	        				<a href="index_reservasi.php" class="content-dashboard-footer foo-2">
	        					<p>Lainnya</p>
	        				</a>
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content bg-success">
	        				<p class="title-content">Data Tipe Kamar</p>
	        				<p class="keterangan">Total: <?php echo "$hitung"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-home"></i></div>
	        				<a href="#" class="content-dashboard-footer foo-3">
	        					<p>Lainnya</p>
	        				</a>
	        			</div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content bg-danger">
	        				<p class="title-content">Transaksi Pembayaran</p>
	        				<p class="keterangan">Total: <?php echo "$hitung"; ?></p>
	        				<div class="icon icon-content"><i class="fas fa-shopping-cart"></i></div>
	        				<a href="#" class="content-dashboard-footer foo-4">
	        					<p>Lainnya</p>
	        				</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col-sm-12 title-dashboard-content">
	        			<p>Laporan Master Data & Transaksi</p>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        		<div class="col-sm-3">
	        			<div class="dashboard-content"></div>
	        		</div>
	        	</div>
			</div>
			<div class="footer">
				<i class="far fa-copyright"></i><span class="y">&nbsp;2019</span><span>Agus Rosi Adi Purwibawa</span>
			</div>
	    </div>
	</div>
	<!-- JS LIBRARY GLOBAL -->
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<!-- JS LIBRARY HOVER POPPER -->
	<script type="text/javascript" src="js/Popper.js"></script>
	<!-- JS LIBRARY SWEETALERT -->
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
	<!-- JS LIBRARY FONT AWESOME 5 -->
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<!-- JS LIBRARY BOOTSTRAP 4 -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- SCRIPT DASHBOARD -->
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#btn-sidebar-toggle').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.h1-title-header-dashboard').toggleClass('increase-width');
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
				cancelButtonColor: "#aaa",
				confirmButtonText: "IYA ! <i class='fas fa-sign-out-alt'></i>",
				showCancelButton: true
			}).then((result) => {
				if (result.value) {
				    Swal.fire({
				    	title: "Goodbye, see you later!",
				    	type: "success",
				    	showConfirmButton: false,
				    	timer: 2000
				    }).then(function() {
						window.location = 'index.php';
					})
				}
			})
		};
	</script>
</body>
</html>