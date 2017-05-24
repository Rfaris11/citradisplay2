<!DOCTYPE html>
<html>
<head>
	<title>Citra display || Home :: BALIKIN</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/bootstrap.css');?>">
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css');?>">

	<!-- individu page -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/home_vw.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/home_vw2.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/owlcarousel/dist/assets/owl.carousel.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/owlcarousel/dist/assets/owl.theme.default.min.css');?>">
	<link rel="stylesheet" media="screen" href="<?=base_url('assets/particle/css/style.css');?>">
	<style type="text/css">
		.mynoPadding{
			padding: 0;
		}

		#particles-js{
			background: #0d0b1e;
			position:absolute;
			top:0;
			right:0;
			bottom:0;
			left:0;
			z-index:0; 
		}
	</style>
	<script type="text/javascript" src="<?=base_url('assets/owlcarousel/dist/owl.carousel.min.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('.owl-carousel').owlCarousel({
		  	loop: true,
		  	margin: 40,
		  	nav: true,
		  	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:8,
		            nav:true,
		            loop:false
		        }
		    }
		  });
		});
	</script>
</head>
<body>

<div class="mynavbarWrapper">
	<nav class="navbar">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>                        
	  </button>
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#"><b>Tokosepiya</b></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <form class="navbar-form navbar-right">
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="Search">
	          <div class="input-group-btn">
	            <button class="btn btn-default" type="submit">
	              <i class="fa fa-search"></i>
	            </button>
	          </div>
	        </div>
	      </form>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home</a></li>
	        <li><a href="#">Page 1</a></li>
	        <li><a href="#">Page 2</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</div>

<!-- START : CAROUSEL -->
<div class="row" style="padding: 120px 30px 30px 30px; margin: 0;/* min-height:100%; height:100%; overflow: hidden; */ display: flex; align-items: center; position: relative;">
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<div class="col-lg-8">
		<div class="slideUtama">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?=base_url('assets/images/home_vw/slide1.jpg');?>" alt="Los Angeles">
						<div class="carousel-caption">
							<h3>Title 1</h3>
							<p>Deskripsi caption 1</p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('assets/images/home_vw/slide1.jpg');?>" alt="Chicago">
						<div class="carousel-caption">
							<h3>Title 1</h3>
							<p>Deskripsi caption 1</p>
						</div>
					</div>
					<div class="item">
						<img src="<?=base_url('assets/images/home_vw/slide1.jpg');?>" alt="New York">
						<div class="carousel-caption">
							<h3>Title 1</h3>
							<p>Deskripsi caption 1</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="fa fa-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="fa fa-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="col-sm-4" style="height:100%; min-height:100%; text-align: center;">
		<h1 class="myColorWhite">CITRA DISPLAY</h1><br>
		<h2 class="myColorWhite">VISI / MISI PERUSAHAAN</h2><br>
		<button type="button" class="btn btn-sm btn-default">Profile Kami</button>
	</div>
</div>
	
<!-- END : CAROUSEL -->

<!-- START : OWL -->
<div class="container-fluid">
	<hr style="margin-bottom: 0;">
	<h4>Brands</h4>
	<div class="owl-carousel owl-theme">
	  <?php for ($i=1; $i <= 15; $i++) { ?>
	  <div class="item">
	  	<img src="<?=base_url('assets/images/home_vw/merk-'.$i.'.jpg');?>" alt="<?='Merk'.$i;?>" class="img-thumbnail" width="120" height="120">
	  </div>
	  <?php } ?>
	</div>
	<hr style="margin-top: 0;">
</div>
<!-- START : OWL -->

<!-- START : MYBOX -->
<div class="container-fluid" style="margin-top: 20px;">
	<div class="panel panel-default">
		<div class="panel-body mypanelBody">
			<div class="myfirstProduk hidden-xs">
				<div class="mysub">
					<img src="<?=base_url('assets/images/home_vw/top-terlaris.jpg');?>" width="100%">
				</div>
			</div>
			<!-- <div class="mynextProduk-prev"> -->
			<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="mynextProduk">
					<img src="<?=base_url('assets/images/home_vw/top-terlaris.jpg');?>" width="100%">
				</div>
			<?php } ?>
			<!-- </div> -->
		</div>
	</div>
</div>
<!-- END : BLOCK CUSTOM -->

<!-- START : MYBOX 2 -->
<div class="container-fluid" style="margin-top: 20px;">
	<div class="panel panel-default">
		<div class="panel-body mypanelBody">
			<div class="myfirstProduk hidden-xs">
				<div class="mysub">
					<img src="<?=base_url('assets/images/home_vw/funko-pirates.jpg');?>" width="100%">
				</div>
			</div>
			<!-- <div class="mynextProduk-prev"> -->
			<?php for ($i=0; $i < 4; $i++) { ?>
				<div class="mynextProduk">
					<img src="<?=base_url('assets/images/home_vw/funko-pirates.jpg');?>" width="100%">
				</div>
			<?php } ?>
			<!-- </div> -->
		</div>
	</div>
</div>
<!-- END : MY BOX 2 -->

<!-- START : CATEGORY -->
<div class="sec-kategori container-fluid">
	<div class="panel panel-default">
		<div class="panel-heading">
			Kategori
		</div>
		<div class="panel-body">
			<ul class="col-sm-4">
				<?php for ($i=1; $i <= 5; $i++) { ?>
					<li><a href="#" class="col-sm-12">Kategori <?=$i;?></a></li>
				<?php } ?>
			</ul>
			<ul class="col-sm-4">
				<?php for ($i=6; $i <= 10; $i++) { ?>
					<li><a href="#" class="col-sm-12">Kategori <?=$i;?></a></li>
				<?php } ?>
			</ul>
			<ul class="col-sm-4">
				<?php for ($i=11; $i <= 15; $i++) { ?>
					<li><a href="#" class="col-sm-12">Kategori <?=$i;?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<!-- END : CATEGORY -->

<script type="text/javascript" src="<?=base_url('assets/particle/particles.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/app.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/lib/stats.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/perpage/home_vw2.js');?>"></script>
</body>
</html>