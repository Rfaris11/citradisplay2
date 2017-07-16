<!DOCTYPE html>
<html>
<head>
	<title>:: Katalog Produk ::</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/bootstrap.css');?>">
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/jQuery-2.1.3.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/bootstrap.js');?>"></script>

	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css');?>">

	<!-- individu page -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/home_vw.css');?>">
	<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/home_vw2.css');?>"> -->
	<link rel="stylesheet" media="screen" href="<?=base_url('assets/particle/css/style.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/perpage/produk/produk.css');?>">
	<style type="text/css">
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
</head>
<body>

<div class="mynavbarWrapper">
	<?php $this->load->view("komponen/navbar2");?>
</div>

<!-- START : TOP -->
<div class="row" style="padding: 120px 30px 40px 30px; margin: 0;/* min-height:100%; height:100%; overflow: hidden; */ display: flex; align-items: center; position: relative;">
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<div class="col-lg-12" style="height:100%; min-height:100%; text-align: center;">
		<h1 class="myColorWhite">Katalog Produk</h1><br>
	</div>
</div>
<!-- END : TOP -->

<div class="container-fluid produk">
	<div class="col-lg-3">
		<div class="myKategori">
			<h3>Kategori</h3>
			<div class="list-group">
			<a href="#all-1" class="list-group-item <?php if($this->uri->segment(1) == "produk" && ($kategori_aktif == null || $kategori_aktif == "all")) echo "list-group-item-infos"?>">SEMUA KATEGORI</a>
			<?php foreach ($kategori as $value) { ?>
				<a href="#<?=$value["NID"];?>-1" class="list-group-item <?php if($kategori_aktif == $value["NID"]) echo "list-group-item-info";?>"><?=$value["VNAMA"];?></a>
			<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-lg-9">
		<div class="alert alert-info alert-dismissable margintop-15 my-alertonoff">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<i><strong>Loading ... !</strong> Sedang memuat, Mohon tunggu...</i>
		</div>
		<div class="col-xs-12">
			<span id="listContent"></span>
		</div>
	<!--?php for ($i=0; $i < 20; $i++) { ?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-default">
				<!--<div class="shape">-->
					<!--<div class="shape-text">-->
					<!--	top								-->
					<!--</div>-->
				<!--</div>-->
				<!-- <div style="position: relative;">
					<img src="<?=base_url('assets/images/produk/sample.png');?>">
					<a href="javascript:void(0);" data-toggle="modal tooltip" title="Lihat cepat"><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 10px;" data-toggle="modal" data-target="#modal-quicklook"><i class="fa fa-eye"></i></button></a>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						A default offer
					</h3>
					<p>
						And a little description.
						<br> and so one
					</p>
				</div>
			</div>
		</div> -->
	<!--?php } ?-->
		<!-- <div class="text-center">
			<ul class="pagination">
				<li><a href="#">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul> 
		</div> -->
		<div class="text-center">
			<div id="my-pagination"></div>
		</div>
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
						<img src="<?=base_url('assets/images/produk/sample.png');?>" class="width-100" alt="loading ...">
					</div>
					<div class="col-lg-8">
						<label>Deskripsi : </label>
						<p id="quicklook-deskripsi"></p>
						<br>
						<label>Kategori : </label><span id="quicklook-kategori"></span>
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

<script type="text/javascript" src="<?=base_url('assets/particle/particles.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/app.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/lib/stats.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/perpage/home_vw2.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/etc/js/jquery.ba-bbq.min.js');?>"></script>
<script type="text/javascript">
	var path = window.location.pathname;
	var host = window.location.hostname;

	$(function(){

		var vari = "#a-1";
		var filter = vari.substr(0, vari.indexOf('-'));
		// alert(filter);

		$.ajaxSetup({
			type: "post",
			cache: false,
			dataType: "json"
		});

		var hash0 = $.param.fragment();
		var hashid0 = hash0.substr(0, hash0.indexOf('-'));
		var hashpage0 = hash0.substr((hash0.indexOf('-') + 1));
		getAllProdukperKategori(hashid0, hashpage0);
		if (hashid0 != "") {
			$(".myKategori div a[href='#" + hash0 + "']").addClass("list-group-item-info");
		}
		else{
			$(".myKategori div a[href='#all']").addClass("list-group-item-info");
		}

		$(window).hashchange(function(){
			var hash = $.param.fragment();
			var hash1 = hash.substr(0, hash.indexOf('-'));
			var hashpage = hash.substr((hash.indexOf('-') + 1));

			$(".myKategori div a").removeClass("list-group-item-info");
			$(".myKategori div a[href^='#" + hash1 + "']").addClass("list-group-item-info");
			$("#listContent").empty();
			$("#my-pagination").empty();

			getAllProdukperKategori(hash1, hashpage);
		});
	});

	function getAllProdukperKategori(id, page){
		$(".my-alertonoff").removeClass("hidden");
		$.ajax({
			url: "<?=base_url('produk/getallproductperkategori');?>",
			data: {idkategori: id, page: page},
			success: function(a){
				var html = "";
				$.each(a.list, function(index, array){
					// percobaan
					// html += "<div>" + array.VNAMA + "</div>";
					html += "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>"
					+ "<div class='offer offer-default'>"
					+ "<div class='posRelative'>"
					+ "<img src='<?=base_url('assets/images/produk/sample.png');?>'>"
					+ '<a href="javascript:void(0);" data-toggle="modal tooltip" title="Lihat cepat"><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 10px;" data-toggle="modal" data-target="#modal-quicklook" onclick="setmodal(this);"><i class="fa fa-eye"></i></button></a></div>'
					+ '<div class="offer-content">'
					+ '<h5 class="produk-title">'
					+ array.VNAMA
					+ "</h5>"
					+ "<span class='hidden produk-kategori'>" + array.NID_KATEGORI + "</span>"
					+ "<span class='hidden produk-deskripsi'>" + array.VDESKRIPSI + "</span>"
					+ "</div></div></div>";
					if ((index + 1)%4 == 0) {
						html += "<div class='clearfix'></div>";
					}
				});
				$(html).appendTo("#listContent");

				var hmtlpage = '<ul class="pagination">';
				var pageAktif = "";
				for (var i = 1; i <= a.numpage; i++) {
					pageAktif = (i == page) ? "class='active'" : "";
					hmtlpage += '<li ' + pageAktif + '><a href="#' + id + '-' + i + '">' + i + '</a></li>';
				}
				hmtlpage += "</ul>";
				$(hmtlpage).appendTo("#my-pagination");

				$(".my-alertonoff").addClass("hidden");
			}
		});
	}

	function setmodal(obj){
		$(".quicklook-title").html($(".offer-content .produk-title",(obj).closest(".offer")).html());
		$("#quicklook-deskripsi").html($(".offer-content .produk-deskripsi", $(obj).closest(".offer")).html());
		$("#quicklook-kategori").html($(".offer-content .produk-kategori", $(obj).closest(".offer")).html());
	}
</script>
</body>
</html>