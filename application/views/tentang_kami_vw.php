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
<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>

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
			<img src="<?=base_url('assets/images/tentang_kami/Logo_CPM.jpg');?>" class="img-rounded">
			<h2>PT. Citra Display</h2>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<p>Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor.</p>
				<br><br>
				<p><i class="fa fa-map-marker"></i><span> Jl. Lorem Ipsum No. XX, Jakarta-Barat 114400, DKI Jakarta, INDONESIA</span></p>
			</div>
			<div class="col-lg-4">
				<div id="map" style="width:400px;height:400px;">My map will go here</div>
			</div>
		</div>
	</div>
	<div class="container margin-top-bottom">
		
	</div>
</div>

<?php $this->load->view("komponen/footer");?>

<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>
<script type="text/javascript">
	function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(-6.269521, 106.831041),
        zoom: 15
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:mapOptions.center});
  	marker.setMap(map);
  	google.maps.event.addListener(marker,'click',function() {
	    var infowindow = new google.maps.InfoWindow({
	      content:"PT XSIS wkwkwk, Jl. Warung Jati Barat No. 63"
	    });
	  	infowindow.open(map,marker);
  	});
} 
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA185dpenYNhUUZMSsjz8MpyDhI_kNVNc&callback=myMap"></script>
</body>
</html>