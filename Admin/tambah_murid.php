
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Universitas Dian Nuswantoro</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SMK TERPADU" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="../css/swipebox.css">
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/roma.css"/>
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<?php include ('../napigasi2.php'); ?>

<div class="clearfix"> </div> 
<!-- Murid -->
<div id="Edit_Murid">
	<div class="container">
    <h3 class="w3l-title cl"> Murid </h3>
    <div class="container margin-atas">
	
<?php 
include ('../koneksi.php');
$tampil="SELECT * FROM `akun` ORDER BY `username` ASC ";
$hasil=mysql_query($tampil);
?>

	
    <form class="form-group" action="Proses_Tambah_Murid.php" method="post" onSubmit="">
    <table class="table">
	
	<tr>
    	<td> NISN : </td>
   		<td> <input type="text" name="NISN" maxlength="10" onkeypress="return hanyaAngka(event)" size="8" required=""> </td>
    </tr>
	
    <tr>
    	<td> Nama : </td>
   		<td> <input type="text" name="Nama"> </td>
    </tr>
	
	<tr>
    	<td> Username : </td>
   		<td> <select name="Username">
				<?php 
				while ($data=mysql_fetch_array($hasil))
				{
					echo "<option value='$data[username]'> $data[username] </option> ";
				}
				?>
			 </select>
		</td>
    </tr>
	
	<tr>
    	<td> Kota : </td>
   		<td> <input type="text" name="Kota"> </td>
    </tr>
	
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
    
    <button class="btn btn-primary"> Simpan </button>
	<a href="murid.php" class="btn btn-primary"> Batal </a>
    
    </form>
    
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<script type="text/javascript">
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
}
</script>

<!-- //Murid -->

<!-- footer -->

<div class="w3layouts_copy_right">
	<div class="container">
		<p>© 2022 Universitas Dian Nuswantoro </p>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->



<!-- smooth scrolling -->
<script src="../js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
<script src="../js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="../js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="../js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>