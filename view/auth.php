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

	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
                <div class="span8 main-container">
                    <div class="main">
            <br />
            <br />
            <br />
            <br />
        <div class="header" >
            <h1>Silahkan Login atau membuat akun GRATIS!</h1>
        </div>
        <p>Sebelum anda post konten, anda harus login terlebih dahulu. </p>
            <form>
                <ul class="right-form">
                    <h3>Login:</h3>
                    <div>
                        <li><input type="text"  placeholder="Username" required/></li>
                        <li> <input type="password"  placeholder="Password" required/></li>
                        <h4><a href="#">I forgot my Password!</a></h4>
                            <input type="submit" onclick="myFunction()" value="Login" >
                    </div>
                    <div class="clear"> </div>
                </ul>
                <br />
                <br />
                <ul class="left-form">
                    <h2>Buat Akun Baru:</h2>
                    <li>
                        <input type="text"   placeholder="Username" required/>
                        <a href="#" class="icon ticker"> </a>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="text"   placeholder="Email" required/>
                        <a href="#" class="icon ticker"> </a>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="password"   placeholder="password" required/>
                        <a href="#" class="icon into"> </a>
                        <div class="clear"> </div>
                    </li> 
                    <li>
                        <input type="password"   placeholder="password" required/>
                        <a href="#" class="icon into"> </a>
                        <div class="clear"> </div>
                    </li> 
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Saya setuju atas <a href="#">syarat</a> dan <a href="#">ketentuan</a> dari NgakakSeruCom</label>
                    <input type="submit" onclick="myFunction()" value="Create Account">
                        <div class="clear"> </div>
                </ul>
                
                <div class="clear"> </div>
                    
            </form>
            
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