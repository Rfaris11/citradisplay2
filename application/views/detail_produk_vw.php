<!DOCTYPE html>
<html>
<head>
	<title>Citra display || Tentang kami ::</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/bootstrap.css');?>">

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css');?>">

	<!-- perpage -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/detailproduk/detail_produk.css');?>">
</head>
<body>

<div class="container-fluid margin-top-bottom">
	<button type="button" class="btn btn-primary btn-lg">Logo / Nama Perusahaan</button>
	<div class="pull-right">
		<p><span class="fa fa-phone"></span> Pesan atau hubungi kami di : (+6221) 8778 1122</p>
	</div>
</div>

<div class="mynavbarWrapper">
	<?php $this->load->view("komponen/navbar3");?>
</div>

<div class="container paddingbottom-25">
	<h1><?=$VNAMA; ?></h1>
	<div class="col-lg-4">
		<img id="my-main-preview" src="<?=base_url('').$VURL;?>" width="100%">
	</div>
	<div class="col-lg-8">
		<div class="col-lg-12" id="my-preview-img">
			<div class="col-lg-4">
				<a href="javascript:void(0);"><img src="<?=base_url().$VURL;?>" width="100%"></a>
			</div>
			<div class="col-lg-4">
				<a href="javascript:void(0);"><img src="<?=base_url().$VURL2;?>" width="100%"></a>
			</div>
			<div class="col-lg-4">
				<a href="javascript:void(0);"><img src="<?=base_url().$VURL3;?>" width="100%"></a>
			</div>
		</div>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#uraian">Uraian Produk</a></li>
			<li><a data-toggle="tab" href="#spek">Spesifikasi</a></li>
		</ul>
		<div class="tab-content">
			<div id="uraian" class="tab-pane fade in active">
				<h3><?=$VNAMA; ?></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div id="spek" class="tab-pane fade">
				<h4>Deskripsi</h4>
				<p><?php echo ($VDESKRIPSI != "") ? $VDESKRIPSI : "-"; ?></p>
				<h4>Spesifikasi</h4>
				<p><?php echo ($VSPESIFIKASI != "") ? $VSPESIFIKASI : "-"; ?></p>
				<h4>Kategori</h4>
				<p><?php echo ($VNAMA_KTG != "") ? $VNAMA_KTG : "-"; ?></p>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view("komponen/footer");?>

<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>
<script type="text/javascript">
	$("#my-preview-img .col-lg-4 a").click(function(e){
		e.preventDefault();
		$("#my-preview-img .col-lg-4 a").removeClass("selected");
		$(this).addClass("selected");
		$("#my-main-preview").attr("src", $("img", $(this)).attr("src"));
	});
</script>
</body>
</html>