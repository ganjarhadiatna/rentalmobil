<?php require 'config/url.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="public/css/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="public/css/assets.css">
	<link rel="stylesheet" type="text/css" href="public/css/header.css">
	<link rel="stylesheet" type="text/css" href="public/css/body.css">
	<link rel="stylesheet" type="text/css" href="public/css/search.css">
	<link rel="stylesheet" type="text/css" href="public/css/story.css">
	<link rel="stylesheet" type="text/css" href="public/css/pikaday.css">

	<!-- JS -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="public/js/moment.js"></script>
	<script type="text/javascript" src="public/js/pikaday.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var menu = '<?php echo $_GET['side'] ?>';
			$('#'+menu).addClass('active');
		});
	</script>
</head>
<body>
	
	<div id="side">
		<div id="side">
			<ul id="side-menu">
				<div class="here bdr-bottom">
					<div class="usr">
						<h2>Options</h2>
					</div>
				</div>
				<div class="here">
					<strong>Main</strong>
					<a href="<?php echo base_url('?side=home'); ?>">
						<li id="home">
							<span class="icn fa fa-lg fa-home"></span>
							<span class="ttl">Halaman Utama</span>
						</li>
					</a>
				</div>
				<div class="here">
					<strong>Add</strong>
					<a href="<?php echo base_url('tambah_mobil.php?side=add'); ?>">
						<li id="add">
							<span class="icn fa fa-lg fa-plus"></span>
							<span class="ttl">Tambah Mobil</span>
						</li>
					</a>
				</div>
				<div class="here">
					<strong>Data</strong>
					<a href="<?php echo base_url('daftar_mobil.php?side=car'); ?>">
						<li id="car">
							<span class="icn fa fa-lg fa-car"></span>
							<span class="ttl">Daftar Mobil</spamn>
						</li>
					</a>
					<a href="<?php echo base_url('daftar_penyewa.php?side=booking'); ?>">
						<li id="booking">
							<span class="icn fa fa-lg fa-users"></span>
							<span class="ttl">Daftar Penyewa</spamn>
						</li>
					</a>
					<a href="<?php echo base_url('daftar_transaksi.php?side=transaction'); ?>">
						<li id="transaction">
							<span class="icn fa fa-lg fa-line-chart"></span>
							<span class="ttl">Daftar Transaksi</spamn>
						</li>
					</a>
				</div>
				<div class="here">
					<strong>Tools</strong>
					<li onclick="logOut()" style="cursor: pointer;">
						<span class="icn fa fa-lg fa-power-off"></span>
						<span class="ttl">Logout</span>
					</li>
				</div>
			</ul>
		</div>
	</div>
</body>
</html>