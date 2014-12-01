<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>NgakakSeru- Santai Aja Kali</title> 
	<meta name="description" content="Ngakak Seru Website Lucu"/>
	<meta name="keywords" content="fun,funny,lol,meme,GIF,wtf,omg,fail,video,cosplay,geeky,forever alone" />
	<meta name="author" content="DDA Academy"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="<?=base_url();?>../img/logo.png"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
						
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			        		<div class="container">
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse">
			            			<ul class="nav">
			              				<li><a href="index.html">TOP</a></li>
			              				<li><a href="about.html">Trending</a></li>
										<li><a href="services.html">Terbaru</a></li>
										<li><a href="pricing.html">TV</a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                  					<li><a href="#">Cewe</a></li>
			                  					<li><a href="#">NSWF</a></li>
			                  					<li><a href="#">GIF</a></li>
			                  					<li><a href="#">Meme</a></li>
			                  					<li><a href="#">Imut</a></li>
			                  					<li><a href="#">Cosplay</a></li>
			                  					<li><a href="#">Timely</a></li>
			                  					<li><a href="#">Komik</a></li>
			                  					<li><a href="#">Makanan</a></li>
			                				</ul>
			              				</li>
			            			</ul>
			          			</div>
			        		</div>
			      		</div>
			    	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->

	<!-- start: Map -->
	<div>

		<!-- starts: Google Maps -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<div id="googlemaps-container-top"></div>
		<div id="googlemaps" class="google-map google-map-full"></div>
		<div id="googlemaps-container-bottom"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="../js/jquery.gmap.min.js"></script>
		<script type="text/javascript">
			$('#googlemaps').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 15,
				markers: [
					{
						address: '-6.331974, 106.961459', // Your Adress Here
						html: 'DDAcademy Ngakak Seru',
						popup: false,
					}

				],

			});
		</script>
		<!-- end: Google Maps -->
	</div>
	<!-- end: Map -->	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
                <div class="span8 main-container">
                    <div class="content-container">
                        <div class="post-container">
                            <h2>Judul Konten</h2><br>
                            <div class="img-container">
                                <img src="../img/default-image.png">
                            </div>
                        </div>
                        <div class="post-tool">
                            <ul class="social-bookmarks ">
                                <li class="facebook" title="Share"><a href="#">facebook</a></li>
                                <li class="twitter" title="Tweet"><a href="#">twitter</a></li>
                            </ul>
                            <a href="" class="like" title="Suka"><i class="ico-thumbs-up  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Tidak Suka"><i class="ico-thumbs-down  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Komentar"><i class="ico-chat ico-white circle-color-full small-color"></i></a>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="post-container">
                            <h2>Judul Konten</h2><br>
                            <div class="img-container">
                                <img src="../img/default-image.png">
                            </div>
                        </div>
                        <div class="post-tool">
                            <ul class="social-bookmarks ">
                                <li class="facebook" title="Share"><a href="#">facebook</a></li>
                                <li class="twitter" title="Tweet"><a href="#">twitter</a></li>
                            </ul>
                            <a href="" class="like" title="Suka"><i class="ico-thumbs-up  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Tidak Suka"><i class="ico-thumbs-down  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Komentar"><i class="ico-chat ico-white circle-color-full small-color"></i></a>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="post-container">
                            <h2>Judul Konten</h2><br>
                            <div class="img-container">
                                <img src="../img/default-image.png">
                            </div>
                        </div>
                        <div class="post-tool">
                            <ul class="social-bookmarks ">
                                <li class="facebook" title="Share"><a href="#">facebook</a></li>
                                <li class="twitter" title="Tweet"><a href="#">twitter</a></li>
                            </ul>
                            <a href="" class="like" title="Suka"><i class="ico-thumbs-up  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Tidak Suka"><i class="ico-thumbs-down  ico-white circle-color-full small-color"></i></a>
                            <a href="" class="like" title="Komentar"><i class="ico-chat ico-white circle-color-full small-color"></i></a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="img-container-ads">
                        <img src="../img/bg-grey.png">
                    </div>
                    <div class="img-container-ads">
                        <img src="../img/bg-grey.png">
                    </div>
                    <div class="img-container-ads">
                        <img src="../img/bg-grey.png">
                    </div>
                    <h2>Subscribe</h2>
                        <input type="text" name="subcribe" class="form-control">
                        <button class="btn btn-default btn-md">Subscribe</button>
                        <br><br>
                    <h2>Get The App</h2>
                        <button class="btn btn-default">DOWNLOAD</button>
                        <br><br>
                    <div id="footer">
                        <a href="">Pasang Iklan</a> · <a href="">Kontak</a> · <a href="">Privasi</a> · <a href="">Peraturan</a>
                        <br>
                        www.NgakakSeru.com © 2014</a>
                    </div>
                </div>

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
  	</div>
	<!-- end: Wrapper  -->			
	</div>
    <!-- start: Footer Menu -->
	

	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script def src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
