<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Maxim - Modern One Page Bootstrap Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">Anggi Sariani</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="input" href="#input">Input</a></li>
							<li><a title="output" href="#output">Output</a></li>
							<li><a title="contact" href="#contact">Contact</a></li>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/anime.png" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>Tugas UAS</strong> Tekweb
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Sistem Informasi <strong>Rumah Sakit</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Anggi Sariani <strong>18000016037</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						Sesedih apapun hatimu saat ini, jangan lupa jaga kesehatan <cite>Fie.Febrian, Pejuang S.Com</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- Input -->
	<section id="input" class="section">
		<div class="container">
			<h4>Input Data Calon Pasien</h4>
			<div class="row">
				<div class="span4 offset2">
					<div>
						<form action="simpan1.php" method="POST">
						ID Pasien:<br>
                        <input type="text" name="Id_pasien" required/>
                        Nama Lengkap:<br>
                        <input type="text" name="nm_pasien" required/>
                        Alamat Rumah:<br>
                        <input type="text" name="alamat" required/>
                        Penyakit yang diderita:<br>
                        <input type="text" name="penyakit" required/>
                        Tanggal masuk:<br>
                        <input type="date" name="tgl_masuk" required/>
                        <input type="submit" value="Simpan" name="add" >
                        </form>
					</div>
				</div>
				<div class="span4 offset">
					<div class="alignright">
						<img src="img/icons/inputdata.png" alt="" />
					</div>
				</div>
			</div>
	</section>
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Kesehatan selalu tampak berharga, setelah kita kehilangannya
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- Output -->
	<section id="output" class="section">
		<div class="container clearfix">
			<h4>Output</h4>
			<div class="row">
				<table class="table table-bordered">
		<tr>
			<th>
				ID
			</th>
			<th>
				Nama 
			</th>
			<th>
				Alamat 
			</th>
			<th>
				Penyakit
			</th>
			<th>
				Tanggal Masuk
			</th>
			<th>
				Opsi
			</th>
		</tr>
			<?php
				include"koneksi.php";
				$no = 1;
				$index = mysqli_query ($koneksi, " select
														Id_pasien,
														nm_pasien,
														alamat,
														penyakit,
														tgl_masuk
												  from 
												  pasien 
												  order by Id_pasien DESC");
				while ($row = mysqli_fetch_array ($index))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nm_pasien']; ?>
			</td>
			<td>
				<?php echo $row['alamat']; ?>
			</td>
			<td>
				<?php echo $row['penyakit']; ?>
			</td>
			<td>
				<?php echo $row['tgl_masuk']; ?>
			</td>
			<td>
				<a href="#" id="edit" data-id="<?php echo $row['Id_pasien']; ?>">Edit</a> |
				<a href="#" id="hapus" data-id="<?php echo $row['Id_pasien']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	</section>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Terimakasih</h4>
			<p>
				Terimakasih sudah melakukan pendaftaran online, demi kenyaman bersama, kami mengharapkan kritik dan saran dari anda, agar membuat website ini lebih baik untuk kedepannya. Atas perhatiannya kami mengucapkan terimakasih. 
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Masukan E-mail" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Masukan Kritik dan Saran"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Kirim Komentar" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; (Fina Febrianti 161051070)
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
							Designed by <a href="https://bootstrapmade.com/">Fie.Febrian</a>
						</div>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
  
</body>

</html>
