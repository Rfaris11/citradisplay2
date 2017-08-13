<!DOCTYPE html>
<html>
<head>
	<title>Citra display || Home ::</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/bootstrap.css');?>">

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css');?>">
	<link href="<?=base_url('assets/aos/aos.css');?>" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/font/css/montserrat-webfont.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font/less/montserrat-webfont.less');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font/scss/montserrat-webfont.scss');?>"> -->

	<!-- perpage -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/home/home_vw3.css');?>">
</head>
<body style="background-image: url(<?=base_url('assets/images/home_vw/background-pattern.jpg');?>);">
<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>

<div class="container-fluid margin-top-bottom">
	<button type="button" class="btn btn-primary btn-lg">Logo / Nama Perusahaan</button>
	<!-- <img src="<?=base_url('assets/images/home_vw/logo.jpg');?>"> -->
	<div class="pull-right">
		<p><span class="fa fa-phone"></span> Pesan atau hubungi kami di : (+6221) 8778 1122</p>
	</div>
</div>

<div class="mynavbarWrapper">
	<?php $this->load->view("komponen/navbar3");?>
</div>

<!-- list slide -->
<div class="container-fluid nopadding">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
	    </ol>

	    <!-- Wrapper for slides -->
    	<div class="carousel-inner">
			<div class="item active">
				<img src="<?=base_url('assets/images/home_vw/slide01.jpg');?>" alt="Los Angeles">
				<div class="carousel-caption">
					<h3>Title 1</h3>
					<p>Deskripsi caption 1</p>
				</div>
			</div>
			<div class="item">
				<img src="<?=base_url('assets/images/home_vw/slide02.jpg');?>" alt="Chicago">
				<div class="carousel-caption">
					<h3>Title 1</h3>
					<p>Deskripsi caption 1</p>
				</div>
			</div>
			<!-- <div class="item">
				<img src="<?=base_url('assets/images/home_vw/slide3.jpg');?>" alt="New York">
				<div class="carousel-caption">
					<h3>Title 1</h3>
					<p>Deskripsi caption 1</p>
				</div>
			</div> -->
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

<!-- intro -->
<div class="container-fluid padding-top-bottom box-shadow section-intro">
	<div class="container">
		<h3>Selamat datang di Citra Display</h3>
		<p>Citra display adalah bla bla bla lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit ametloremlorem ipsum dolor sit ametlorem ipsum dolor sit ametloremlorem lorem ipsum dolor sit amet</p>
		<p>Citra display adalah bla bla bla lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit ametloremlorem ipsum dolor sit ametlorem ipsum dolor sit ametloremlorem lorem ipsum dolor sit amet</p>
	</div>
	<div class="container padding-top-bottom">
		<div class="col-lg-4" data-aos="flip-up" data-aos-duration="2000">
			<span class="fa fa-cubes fontsize-50"></span>
			<p class="margin-top-20">Variasi pilihan lengkap</p>
		</div>
		<div class="col-lg-4" data-aos="flip-up" data-aos-duration="2000">
			<span class="fa fa-diamond fontsize-50"></span>
			<p class="margin-top-20">Produk berkualitas</p>
		</div>
		<div class="col-lg-4" data-aos="flip-up" data-aos-duration="2000">
			<span class="fa fa-money fontsize-50"></span>
			<p class="margin-top-20">Harga bersaing</p>
		</div>
	</div>
</div>

<!-- list Merk -->
<!-- <div class="container-fluid padding-top-bottom section-brand">
	<div class="title-brand">
		<h2>Our Brands</h2>
		<span class="pull-right">
			<!-- Rounded switch --.>
			<label class="switch">
			  <input type="checkbox" id="view-all-brand">
			  <div class="slider round"></div>
			</label> 
		</span>
		<span class="pull-right">
			Lihat semua&nbsp;
		</span>
	</div>
	<div>
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
		<img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail">
	<!-- <img src="<?=base_url('assets/images/home_vw/merk-1.jpg');?>" alt="Merk 1" class="col-lg-2 img-thumbnail visible-hidden"> --.>
	</div>
</div> -->

<!-- list BOX kategori -->
<div class="container padding-top-20 margin-top-bottom">
	<?php
	foreach ($kategori as $item => $value) { ?>
	<div class="panel panel-default box-shadow"
	<?php if ($item%2 == 0) {
		echo 'data-aos="fade-left"';
	}
	else{
		echo 'data-aos="fade-right"';
		} ?> data-aos-offset="200">
		<div class="panel-body">
		<?php if ($item%2 == 0) { ?>
			<div class="col-lg-4">
				<img src="<?=base_url('assets/images/ratio/ratio-4-3.png');?>" class="img-thumbnail">
			</div>
			<div class="col-lg-8">
				<h3><?=$value['VNAMA'];?></h3>
				<p><?=$value['VDESKRIPSI'];?></p>
				<a class="btn btn-primary" href="<?=base_url('produk#').$value["NID"].'-1';?>">Lihat Produk</a>
			</div>
		<?php }
		else{ ?>
			<div class="col-lg-8">
				<h3><?=$value['VNAMA'];?></h3>
				<p><?=$value['VDESKRIPSI'];?></p>
				<a class="btn btn-primary" href="<?=base_url('produk#').$value["NID"].'-1';?>">Lihat Produk</a>
			</div>
			<div class="col-lg-4">
				<img src="<?=base_url('assets/images/ratio/ratio-4-3.png');?>" class="img-thumbnail">
			</div>
		<?php } ?>
		</div>
	</div>
	<?php } ?>
</div>

<!-- list produk -->
<div class="container padding-bottom-40">
	<div class="col-lg-12">
	<?php foreach ($topproduk as $idx => $value) { ?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div data-aos="flip-left" data-aos-duration="2000">
			<div class="offer offer-default">
				<!--<div class="shape">-->
					<!--<div class="shape-text">-->
					<!--	top								-->
					<!--</div>-->
				<!--</div>-->
				<div style="position: relative;">
					<img src="<?=base_url().$value['VURL'];?>">
					<a href="javascript:void(0);" data-toggle="modal tooltip" title="Lihat cepat"><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 10px;" data-toggle="modal" data-target="#modal-quicklook" onclick="setmodal(this);"><i class="fa fa-eye"></i></button></a>
				</div>
				<div class="offer-content">
					<h4 class="produk-title">
						<?=$value["VNAMA"]; ?>
					</h4>
					<span class='hidden vurl1'><?=$value['VURL'];?></span>
					<span class='hidden vurl2'><?=$value['VURL2'];?></span>
					<span class='hidden vurl3'><?=$value['VURL3'];?></span>
					<span class="hidden produk-kategori">
						<?=$value["VNAMA_KTG"];?>
					</span>
					<span class="hidden produk-deskripsi">
						<?=$value["VDESKRIPSI"];?>
					</span>
				</div>
			</div>
		</div>
		</div>
	<?php if (intval($idx + 1)%4 == 0) { ?>
		<div class="clearfix"></div>
	<?php } } ?>
	</div>
</div>

<!-- modal quick look -->
<div class="modal fade" id="modal-quicklook" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title quicklook-title"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?=base_url('assets/images/produk/sample.png');?>" id="my-main-preview" class="width-100" alt="loading ...">
					</div>
					<div class="col-lg-8">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#gambar">Gambar</a></li>
							<li><a data-toggle="tab" href="#uraian">Uraian Produk</a></li>
						</ul>
						<div class="tab-content">
							<div id="gambar" class="tab-pane fade in active">
								<br>
								<div class="col-lg-4">
									<a href="javascript:void(0);"><img src="<?=base_url('assets/images/produk/sample.png');?>" class="width-100" alt="loading ..."></a>
								</div>
								<div class="col-lg-4">
									<a href="javascript:void(0);"><img src="<?=base_url('assets/images/produk/sample.png');?>" class="width-100" alt="loading ..."></a>
								</div>
								<div class="col-lg-4">
									<a href="javascript:void(0);"><img src="<?=base_url('assets/images/produk/sample.png');?>" class="width-100" alt="loading ..."></a>
								</div>
							</div>
							<div id="uraian" class="tab-pane fade">
								<br>
								<label>Deskripsi : </label>
								<p id="quicklook-deskripsi"></p>
								<br>
								<label>Kategori : </label><span id="quicklook-kategori"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("komponen/footer");?>

<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>
<script src="<?=base_url('assets/aos/aos.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		AOS.init({
				// easing: 'ease-out-back',
				duration: 1000
			});

		$('[data-toggle="tooltip"]').tooltip();

		var path = window.location.pathname;
		var host = window.location.hostname;
		var base = "<?=base_url('produk');?>";
		console.log("path : " + path);
		console.log("host : " + host);
		console.log("host : " + base);
	});

	function setmodal(obj){
		$(".quicklook-title").html($(".offer-content .produk-title",(obj).closest(".offer")).html()); //title
		$("#my-main-preview").attr("src", $(".offer-content .vurl1", $(obj).closest(".offer")).html()); //gambar utama
		$("#gambar div img:eq(0)").attr("src",$(".offer-content .vurl1", $(obj).closest(".offer")).html()); //thumbnail 1
		$("#gambar div img:eq(1)").attr("src",$(".offer-content .vurl2", $(obj).closest(".offer")).html()); //thumbnail 2
		$("#gambar div img:eq(2)").attr("src",$(".offer-content .vurl3", $(obj).closest(".offer")).html()); //thumbnail 3
		$("#quicklook-kategori").html($(".offer-content .produk-kategori", $(obj).closest(".offer")).html()); //kategori
		$("#quicklook-deskripsi").html($(".offer-content .produk-deskripsi", $(obj).closest(".offer")).html()); //kategori
	}

	$("#gambar .col-lg-4 a").click(function(e){
		e.preventDefault();
		console.log("tes");
		$("#gambar .col-lg-4 a").removeClass("selected");
		$(this).addClass("selected");
		$("#my-main-preview").attr("src", $("img", $(this)).attr("src"));
	});
	
</script>
</body>
</html>