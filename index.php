<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap 4 Corousel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	.carousel-indicators li {
	  width: 10px;
	  height: 10px;
	  border-radius: 100%;
	}
	.carousel-control-next-icon, .carousel-control-prev-icon {
		background-color: black !important;
		border-radius: 50% !important;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-success fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="bd-example mt-5">
	  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2000">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <img src="dk3.png" class="d-block w-100" alt="gambar">
	        <div class="carousel-caption d-none d-md-block">
	          <h3>Judul Slide 1</h3>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="dk4.png" class="d-block w-100" alt="gambar">
	        <div class="carousel-caption d-none d-md-block">
	          <h3>Judul Slide 2</h3>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="dk2.png" class="d-block w-100" alt="gambar">
	        <div class="carousel-caption d-none d-md-block">
	          <h3>Judul Slide 3</h3>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        </div>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>

	<div class="container mb-5">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Demo Corousel / Banner pada Bootstrap 4</h2><hr>
		<div class="row">
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Standar</h4>
				<div id="carouselStandar" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				        <img src="dk2.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk3.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk4.png" class="d-block w-100" alt="gambar">
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Dengan Control</h4>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="dk2.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk3.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk4.png" class="d-block w-100" alt="gambar">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
		<hr>
		
		<div class="row">
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Dengan Indikator</h4>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="dk2.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk3.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk4.png" class="d-block w-100" alt="gambar">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Dengan Caption</h4>
				<div class="bd-example">
				  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <img src="dk2.png" class="d-block w-100" alt="gambar">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>First slide label</h5>
				          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				        </div>
				      </div>
				      <div class="carousel-item">
				        <img src="dk3.png" class="d-block w-100" alt="gambar">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>Second slide label</h5>
				          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				        </div>
				      </div>
				      <div class="carousel-item">
				        <img src="dk4.png" class="d-block w-100" alt="gambar">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>Third slide label</h5>
				          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				        </div>
				      </div>
				    </div>
				    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Crossfade</h4>
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="dk2.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk3.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk4.png" class="d-block w-100" alt="gambar">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<div class="col-sm-6">
				<h4 class="bg-success text-white" align="center">Individual .carousel-item interval</h4>
				<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active" data-interval="10000">
				      <img src="dk2.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item" data-interval="2000">
				      <img src="dk3.png" class="d-block w-100" alt="gambar">
				    </div>
				    <div class="carousel-item">
				      <img src="dk4.png" class="d-block w-100" alt="gambar">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>

	<div class="navbar bg-dark">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>
	<script type="text/javascript">
		$('.carousel').carousel({
		  interval: 2000
		})
	</script>
</body>
</html>