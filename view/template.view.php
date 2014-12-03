<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('head/head.php'); ?> 
</head>
<body>
	
	<!--start: Header -->
	<header>	
	<?php include('head/header.php');?>
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
                <?php include ('sidebar/sidebar.php'); ?>

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