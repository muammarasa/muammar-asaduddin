<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang di RS WAVA HUSADA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<img src="wava.png" alt="Paris" width="100" height="50">
		<h1 class="judul">RS WAVA HUSADA</h1>
		<h3 class="deskripsi">Mu'ammar Asaduddin</h3>

	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Beranda</a></li>
			<li><a href="index.php?page=tentang">Tentang Kami</a></li>
			<li><a href="index.php?page=hubungi">Hubungi</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;
			case 'hubungi':
				include "hubungi.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
	</div>
</div>
</body>
</html>