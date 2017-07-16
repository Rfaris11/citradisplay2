<!DOCTYPE html>
<html>
<head>
	<title>Citra display || Tentang kami ::</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/bootstrap.css');?>">

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css');?>">

	<!-- perpage -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/tentang_kami/tentang_kami_vw.css');?>">
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

<div class="container-fluid section-info">
	<div class="container margin-top-bottom">
		<div class="text-center margin-top-bottom">
			<img src="<?=base_url('assets/images/tentang_kami/logo.jpg');?>" class="img-circle">
			Nama PT / Perusahaan
		</div>
		<p>Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor.</p>
	</div>
	<div class="container margin-top-bottom">
		
	</div>
</div>

<?php $this->load->view("komponen/footer");?>

<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>
</body>
</html>