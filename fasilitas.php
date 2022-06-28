<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Universitas Dian Nuswantoro</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>
.container5 {
	max-width : 1200px;
	margin : auto ;
	background : #fff;
	overflow : auto;
}
.gallery {
margin : 5px;
margin-top : 30px;
margin-bottom : 30px;
border : 1px solid #ccc;
float : left;
width : 390px;
}
.gallery img {
width : 100%;
height : 200px;
}

.desc h3 {
padding : 15px;
text-align : center ;
}

.judul h2 {
margin-top : 20px;
}
.warna-teks {
margin-left:5px;
color : #000000;
}

</style>
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i> UDINUS</a></h1>

			</div>
			<div class="w3layouts_header_right">
			    <form action="#" method="post">
					
					
				</form>
			</div>
			
			
			<?php
			@session_start();
			if (empty($_SESSION['user']))
			{
				//echo "<a href='./Login'> Login </a>";
				echo "
				<ul class='agile_forms'>
				<li><a class='active' href='#' data-toggle='modal' data-target='#myModal2'><i class='fa fa-sign-in' aria-hidden='true'></i> Masuk </a> </li>
				<li><a href='#' data-toggle='modal' data-target='#myModal3'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Daftar </a> </li>
				</ul>";
			}
			else
			{
				echo "
						
						<ul class='agile_forms'>
							<div class='dropdown'>
							<button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							$_SESSION[user] <span class='caret'></span>
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
							<table class='table'>
							<tr><td><a class='dropdown-item' href='#'>Profil</a> </td></tr>
							<tr><td><a class='dropdown-item' href='nilai.php'>Cek Nilai action</a></td></tr>
							<tr><td><a class='dropdown-item' href='logout.php'>Logout</a></td></tr>
							</table>
							</div>
							</div>
						</ul>
						
					 ";
				//echo "<a href='1.php'> Login </a>";
			}
			?>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="effect-3">Beranda</a></li>
						<li> <a class='effect-3 scroll' data-toggle='dropdown'>Fakultas<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
								<li><a href='ti.php' >Teknik Informatika</a></li>
								<li><a href='Kesehatan.php' >Kesehatan</a></li>
								<li><a href='Ekonomi.php' >Ekonomi & Bisnis</a></li>
								<li><a href='Teknik.php' >Teknik</a></li>
								<li><a href='ilmu.php' >Ilmu Budaya</a></li>
							</ul>
						</li>
						<li><a href="fasilitas.php" class="effect-3">Fasilitas </a></li>
						<li>
						<a href="profile_sekolah.php" class="effect-3">Profil UDINUS</a>
						</li>
						<li><a href="mail.php" class="effect-3">Contact</a></li>
					</ul>
				</nav>
			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Masuk</h3>	
					<div class="login-form">
						<form action="peroses_login.php" method="post">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<div class="tp">
								<input type="submit" value="Masuk">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Daftar</h3>	
					<div class="login-form">
						<form action="proses_daftar.php" method="post" onkeyup='check();'>
						   <input type="text" name="username" placeholder="Username" required="">	
							<input type="password" name="password" id="Password1" placeholder="Password" required="">
							<input type="password" name="password" id="Password2" placeholder="Confirm Password" required="">
							<span id='message'></span>
							
							<input type="text" name="Nisn" placeholder="NISN" maxlength="10" required="">
							<input type="text" name="Nama_Murid" placeholder="Nama" required="">
							<input type="text" name="Kota" placeholder="Kota" required="">
							
<table class="table text-left">	
	<tr>
    	<td> Jenis Kelamin : </td>
   		<td><select name="Jenis_Kelamin">
    			<option value="Laki-Laki" selected> Laki-Laki </option>
				<option value="Perempuan"> Perempuan </option>
			</select>
		</td>
    </tr>
	
	<tr>
    	<td> Agama : </td>
   		<td><select name="Agama">
    			<option value="Islam" selected> Islam </option>
				<option value="Kristen"> Kristen </option>
				<option value="Katolik"> Katolik </option>
				<option value="Hindu" > Hindu </option>
				<option value="Buddha"> Buddha </option>
				<option value="Kong_Hu_Cu"> Kong Hu Cu </option>
			</select>
		</td>
    </tr>
    
    <tr>
    	<td> Jurusan : </td>
        <td> <select name="Jurusan">
    			<option value="Program Sarjana" selected> Program Sarjana </option>
				<option value="S1 Akuntansi"> S1 Akuntansi </option>
				<option value="S1 Manajemen"> S1 Manajemen </option>
				<option value="Program Pascasarjana"> Program Pascasarjana </option>
				<option value="S2 Manajemen"> S2 Manajemen </option>
				<option value="Program Sarjana Terapan"> Program Sarjana Terapan </option>
				<option value="D4 Manajemen Perhotelan"> D4 Manajemen Perhotelan </option>
				<option value="S1 Sastra Inggris"> S1 Sastra Inggris </option>
				<option value="S1 Sastra Jepang"> S1 Sastra Jepang </option>
				<option value="Program Vokasi"> Program Vokasi </option>
				<option value="D3 Manajemen Informatika"> D3 Manajemen Informatika </option>
				<option value="D3 Penyiaran"> D3 Penyiaran </option>
				<option value="D3 Teknik Informatika"> D3 Teknik Informatika </option>
				<option value="D4 Animasi"> D4 Animasi </option>
				<option value="D4 Film dan Televisi"> D4 Film dan Televisi </option>
				<option value="S1 Desain Komunikasi Visual"> S1 Desain Komunikasi Visual </option>
				<option value="S1 Ilmu Komunikasi"> S1 Ilmu Komunikasi </option>
				<option value="S1 Sistem Informasi"> S1 Sistem Informasi </option>
				<option value="S1 Teknik Informatika"> S1 Teknik Informatika </option>
				<option value="S2 Teknik Informatika"> S2 Teknik Informatika </option>
				<option value="S3 Ilmu Komputer"> S3 Ilmu Komputer </option>
				<option value="D3 Rekam Medis dan Informasi Kesehatan"> D3 Rekam Medis dan Informasi Kesehatan </option>
				<option value="S1 Kesehatan Lingkungan"> S1 Kesehatan Lingkungan </option>
				<option value="S1 Kesehatan Masyarakat"> S1 Kesehatan Masyarakat </option>
				<option value="S1 Teknik Biomedik"> S1 Teknik Biomedik </option>
				<option value="S1 Teknik Elektro"> S1 Teknik Elektro </option>
				<option value="S1 Teknik Industri"> S1 Teknik Industri </option>
			 </select>
       	</td>
    </tr>
    
    <tr>
    	<td>Fakultas : </td>
        <td><select name="Kelas">
    			<option value="1" selected> Fakultas Ilmu Komputer </option>
				<option value="2"> Fakultas Ekonomi dan Bisnis </option>
				<option value="3"> Fakultas Ilmu Budaya </option>
				<option value="3"> Fakultas Teknik </option>
				<option value="3"> Fakultas Kesehatan </option>
			</select>
      	</td>
 	</tr>
    </table>
							
							<input type="submit" value="Daftar" id="Daftar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div>

<!-- jangan lupa tambahin ini lurr <?php //include ('napigasi.php'); ?> 
Jangan lupa hapus "//" nya cuy -->


<div class = "container5">
<div class ="judul">
<center><h2>FASILITAS</h2></center>
</div>
	<div class="gallery">
		<img src="images/aula.jpg"  >
		<div class ="desc">
				<h3>GEDUNG AULA</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/Lapbas.jpg" >
		<div class ="desc">
				<h3>Lapangan Basket</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/Perpustakaan.png">
		<div class ="desc">
				<h3>Perpustakaan</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/komputer.jpg" >
		<div class ="desc">
				<h3>Lab Komputer</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/bus.jpg" >
		<div class ="desc">
				<h3>BUS KAMPUS</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/kantin.jpg">
		<div class ="desc">
				<h3>Kantin Kampus</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/center.jpg">
		<div class ="desc">
				<h3>Tax Center</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/Fotografi.jpg">
		<div class ="desc">
				<h3>Tempat Fotografi</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/klinik.png">
		<div class ="desc">
				<h3>Klinik Kampus</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/masjid.png">
		<div class ="desc">
				<h3>Masjid Kampus</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/rooftop.jpg">
		<div class ="desc">
				<h3>Rooftop & Garden</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/Turnitin.png">
		<div class ="desc">
				<h3>Turnitin</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/ukm.png">
		<div class ="desc">
				<h3>Gedung UKM</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/wall.jpg">
		<div class ="desc">
				<h3>Wall Climbing</h3>
			</div>
		</div>
		
</div>




<!-- footer -->

<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2022 Universitas Dian Nuswantoro </p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->


<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>
