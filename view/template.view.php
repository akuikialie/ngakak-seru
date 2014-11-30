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
						address: '-6.331917, 106.960581', // Your Adress Here
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
                <div class="span8">
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
                <div class="span4">
                <h2>Iklan di sini</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </p>
                </div>

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
  	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="../img/logo-footer-menu.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">

					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.html">Mulai</a></li>

							<li><a href="about.html">Tentang</a></li>

							<li><a href="services.html">Pelayanan</a></li>

							<li><a href="pricing.html">Harga</a></li>

							<li><a href="contact.html">Kontak</a></li>

						</ul>

					</div>

				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">

					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>

				</div>
				<!-- end: Footer Menu Back To Top -->

			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">

		<!-- start: Container -->
		<div class="container">

			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">

					<h3>Tentang Kami</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					</p>

				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">

					<h3>Foto Team</h3>
					<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>

				</div>
				<!-- end: Photo Stream -->

				<div class="span6">

					<!-- start: Follow Us -->
					<h3>Ikuti Kami!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->

					<!-- start: Newsletter -->
					<form id="newsletter">
						<h3>Koran</h3>
						<p>Silahkan tinggalkan email:</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->

				</div>

			</div>
			<!-- end: Row -->	

		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				&copy; 2014, DDAcademy. <a href="http://ngakakseru.com" alt="PT. Ngakak Seru Indonesia">PT Ngakak Seru Indonesia</a> <br>designed by PangeranWeb in Indonesia <img src="<?=base_url();?>../img/poland2.png" alt="Poland" style="margin-top:-4px">
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

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
