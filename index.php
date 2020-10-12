<?php 
  include 'koneksi.php';
  $ambil=$conn->query("SELECT * FROM kepadatan");
  $pecah=$ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Dukcapil Bangli</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo_icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

   

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo1.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Peta</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tabel">Tabel Data</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testimonials">Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Pengaduan</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
	
	<div id="home" class="ct-header ct-header--slider ct-slick-custom-dots">
		<div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">

			<div class="ct-header tablex item" data-background="images/slider3.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">Selamat Datang Dinas Pencatatan Sipil</h1>
									<p class="animated">Bhukti Mukti Bhakti</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="images/slider1.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">Bekkstore</h1>
									<p class="animated">tomorrow will be better</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ct-header tablex item" data-background="images/slider2.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
									<h1 class="big animated">Bekkstore</h1>
									<p class="animated">you're awesome</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- .ct-slick-homepage -->
	</div><!-- .ct-header --> 
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Services</h3>
                <p>Kami menawarkan beberapa treatment untuk perawatan sepatu</p>
            </div>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="./resources/ol3-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <style>
        html, body {
            background-color: #ffffff;
        }
        </style>
<style>
.tooltip {
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  color: white;
  padding: 4px 8px;
  opacity: 0.7;
  white-space: nowrap;
}
.tooltip-measure {
  opacity: 1;
  font-weight: bold;
}
.tooltip-static {
  background-color: #ffcc33;
  color: black;
  border: 1px solid white;
}
.tooltip-measure:before,
.tooltip-static:before {
  border-top: 6px solid rgba(0, 0, 0, 0.5);
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  content: "";
  position: absolute;
  bottom: -6px;
  margin-left: -7px;
  left: 50%;
}
.tooltip-static:before {
  border-top-color: #ffcc33;
}
.measure-control {
  top: 65px;
  left: .5em;
}
.ol-touch .measure-control {
  top: 80px;
}
</style>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
            <div id="popup" class="ol-popup">
                <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                <div id="popup-content"></div>
            </div>
        </div>
        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="./resources/ol3-layerswitcher.js"></script>
        <script src="layers/ADMINISTRASIKECAMATAN_AR_0.php"></script>
        <script src="styles/ADMINISTRASIKECAMATAN_AR_0_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/qgis2web.js"></script>
        <script src="./resources/Autolinker.min.js"></script>
		</div>
	</div>

	<div id="tabel" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Tabel Data</h3>
                <p><h4>Jumlah Penduduk</h4></p>
                <table class="table table-bordered table-striped"	>
       <thead>
       <tr>
           <th><h4>Kecamatan</h4></th>
           <th><h4>Kode Dagri</h4></th>
           <th><h4>Jumlah (jiwa)</h4></th>
           <th><h4>OPSI</h4></th>
       </tr>
       </thead>

       <tbody>

<?php
//ambil data dari tb_produk dan tb_kategori  di database
$ambil = $conn->query("SELECT * FROM kepadatan"  );
while($a=mysqli_fetch_array($ambil)){
    ?>
       <tr>
           <td><?php echo $a['kecamatan'];?></td>
           <td><?php echo $a['kodedagri'];?></td>
           <td><?php echo $a['jml'];?></td>
           <td>
 
          <a href="edit.php?id=<?php echo $a['kodedagri'];?>" class="sim-btn btn-new">Edit</a>
        </td>
       </tr>
<?php
}
?>
</tbody>
</table>
           </div>
		</div>
 	</div>


	<div id="gallery" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Gallery</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single spi-hr fix hover">
						<img src="uploads/1.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Vans</h3>
							<h4>Before</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/2.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3></h3>
							<h4>After</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/3.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3></h3>
							<h4></h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/3.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/4.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Logo design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/4.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/5.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3></h3>
							<h4></h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/5.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single spi-hr fix">
						<img src="uploads/6.jpg" class="img-fluid" alt="Image">
						<div class="text-hover">
							<h3>Logo design</h3>
							<h4>Lorem ipsum</h4>
						</div>
						<div class="img-overlay">
							<a href="uploads/6.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	 <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid">
                                <h4>Aanggun</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3> MENTEP!</h3>
                                <p class="lead">sepatuku jadi putihh kyk baru lagi</p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid">
                                <h4>Divya</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3>Bekkstore keren!</h3>
                                <p class="lead">sepatuku jadi bersih padahal tadinya kotor banget </p>
								<i class="fa fa-quote-right"></i>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid">
                                <h4>Fanny </h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About Bekkstore.</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
						<img src="images/logoo.png" alt="" class="img-fluid img-rounded fat-ab">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
			
			

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact Me</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

<?php
if(isset($_POST['kirim'])){
$nama= mysqli_real_escape_string($conn, $_POST['nama']);    //varibel field nama
$email= mysqli_real_escape_string($conn, $_POST['email']);    //varibel field stok
$pesan= mysqli_real_escape_string($conn, $_POST['pesan']);
$no_hp= mysqli_real_escape_string($conn, $_POST['hp']);
var_dump($nama);
 if(!empty($nama) && !empty($email) && !empty($pesan) && !empty($no_hp)){ 
      $save=mysqli_query($conn, "INSERT INTO pengaduan (nama,email,pesan,no_hp) VALUES ('$nama','$email','$pesan','$no_hp')");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('aduan terkirim');document.location='index.php'</script>";
    }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('aduan gagal');document.location='index.php'	</script>";
    }
       }
    
}
 ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="nama" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="email" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="hp" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Masukkan no hp anda">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" name="pesan" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button  class="sim-btn btn-new from-middle animated" data-text="Kirim Aduan" type="submit" name="kirim" onclick="return confirm('Anda yakin ingin mengirim aduan?')">Kirim Aduan</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">Dukcapil Bangli</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/animated-slider.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>