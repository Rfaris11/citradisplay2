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
		<!-- <div class="myFilter">
			<h3>Filter</h3>
			<form action="javascript:void(0);" method="POST" id="myFilter">
				<input type="text" name="search_produk">
				<button type="submit" name="button_search">Cari</button>
			</form>
		</div> -->
		<div class="myKategori">
			<h3>Kategori</h3>
			<div class="list-group">
			<a href="#?ktg=0&hal=1" class="list-group-item <?php if($this->uri->segment(1) == "produk" && ($kategori_aktif == null || $kategori_aktif == "all")) echo "list-group-item-info"?>" onclick="resetsearch();">SEMUA KATEGORI</a>
			<?php foreach ($kategori as $value) { ?>
				<a href="#?ktg=<?=$value["NID"];?>&hal=1" class="list-group-item <?php if($kategori_aktif == $value["NID"]) echo "list-group-item-info";?>" onclick="resetsearch();"><?=$value["VNAMA"];?></a>
			<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-lg-9">
		<div class="alert alert-info margintop-15">
			<strong id="notif-keyword"></strong> <i>total terdapat <span id="notif-item">-</span> item.</i>
			<span class="pull-right">
				<select name="dropdown_itemperpage">
					<option>25</option>
					<option>50</option>
				</select>
			</span>
		</div>
		<div class="alert alert-warning alert-dismissable margintop-15 my-alertonoff">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<i><strong>Loading ... !</strong> Sedang memuat, Mohon tunggu...</i>
		</div>
		<div class="col-xs-12">
			<span id="listContent"></span>
			<div id="my-detailImg"></div>
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
					<div class="col-lg-4" id="my-preview-img">
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
								<label>Kategori : </label>&nbsp;<span id="quicklook-kategori"></span>
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

<script type="text/javascript" src="<?=base_url('assets/particle/particles.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/app.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/particle/js/lib/stats.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/perpage/home_vw2.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/etc/js/jquery.ba-bbq.min.js');?>"></script>
<script type="text/javascript">
	var path = window.location.pathname;
	var host = window.location.hostname;

	$(function(){
		// var vari = "#a-1";
		// var filter = vari.substr(0, vari.indexOf('-'));
		// alert(filter);
		var ktgdef = getUrlVars()["ktg"];
		var haldef = getUrlVars()["hal"];
		var caridef = getUrlVars()["cari"];

		$.ajaxSetup({
			type: "post",
			cache: false,
			dataType: "json"
		});

		// var hash0 = $.param.fragment();
		// var hashid0 = hash0.substr(0, hash0.indexOf('-'));
		// var hashpage0 = hash0.substr((hash0.indexOf('-') + 1));
		(typeof ktgdef === "undefined" && typeof caridef !== "undefined") ? searchProduct(caridef) : getAllProdukperKategori(0, haldef);

		if (typeof ktgdef != "undefined") {
			$(".myKategori div a[href^='#?ktg=" + ktgdef + "&hal']").addClass("list-group-item-info");
		}
		else if((typeof ktgdef == "undefined")){
			$(".myKategori div a[href^='#?ktg=0&hal']").addClass("list-group-item-info");
		}

		$(window).hashchange(function(){
			// var hash = $.param.fragment();
			// var hash1 = hash.substr(0, hash.indexOf('-'));
			// var hashpage = hash.substr((hash.indexOf('-') + 1));
			var ktg = getUrlVars()["ktg"];
			var hal = getUrlVars()["hal"];
			var cari = getUrlVars()["cari"];

			$(".myKategori div a").removeClass("list-group-item-info");
			$(".myKategori div a[href^='#?ktg=" + ktg + "&hal']").addClass("list-group-item-info");
			$("#listContent").empty();
			$("#my-pagination").empty();

			// (typeof ktg === "undefined") ? null : getAllProdukperKategori(ktg, hal);
			// (typeof cari === "undefined") ? null : searchProduct(cari, hal);
			if (typeof ktg !== "undefined") 
				getAllProdukperKategori(ktg, hal);
			else if (typeof cari !== "undefined")
				searchProduct(cari, hal);
		});
	});

	function getAllProdukperKategori(id, page){
		$(".my-alertonoff").removeClass("hidden");
		$.ajax({
			url: "<?=base_url('produk/getallproductperkategori');?>",
			data: {idkategori: id, page: page},
			success: function(a){
				// console.log(a.list);
				var html = "";
				$.each(a.list, function(index, array){
					// percobaan
					// html += "<div>" + array.VNAMA + "</div>";
					html += "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>"
					+ "<div class='offer offer-default'>"
					+ "<div class='posRelative' id='myImgProd'>"
					+ "<img src='<?=base_url();?>" + array.VURL + "'>"
					+ '<a href="javascript:void(0);" data-toggle="modal tooltip" title="Lihat cepat"><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 10px;" data-toggle="modal" data-target="#modal-quicklook" onclick="setmodal(this);" nid="' + array.NID + '""><i class="fa fa-eye"></i></button></a>'
					+ '<a href="<?=base_url('produk/detail/');?>' + array.NID + '" ><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 50px;"><i class="fa fa-link"></i></button></a></div>'
					+ '<div class="offer-content">'
					+ '<h5 class="produk-title">'
					+ array.VNAMA
					+ "</h5>"
					+ "<span class='hidden vurl1'>" + array.VURL + "</span>"
					+ "<span class='hidden vurl2'>" + array.VURL2 + "</span>"
					+ "<span class='hidden vurl3'>" + array.VURL3 + "</span>"
					+ "<span class='hidden produk-kategori'>" + array.VNAMA_KTG + "</span>"
					+ "<span class='hidden produk-deskripsi'>" + array.VDESKRIPSI + "</span>"
					+ "</div></div></div>";
					if ((index + 1)%4 == 0) {
						html += "<div class='clearfix'></div>";
					}
				});
				$(html).appendTo("#listContent");

				$("#my-detailImg").empty() // clearance box list detail img
				/* start : init list direktori img detail */
				var detailImg = "";
				$.each(a.img, function(index, array){
					detailImg += '<div nid="' + array.NID_PRODUK + '" vurl="' + array.VURL + '"></div>';
				});
				$(detailImg).appendTo("#my-detailImg");
				/* end : init list direktori img detail */

				var hmtlpage = '<ul class="pagination">';
				var pageAktif = "";
				page = (page == "") ? 1 : page;
				for (var i = 1; i <= a.numpage; i++) {
					pageAktif = (i == page) ? "class='active'" : "";
					hmtlpage += '<li ' + pageAktif + '><a href="#?ktg=' + id + '&hal=' + i + '">' + i + '</a></li>';
				}
				hmtlpage += "</ul>";
				$(hmtlpage).appendTo("#my-pagination");

				$(".my-alertonoff").addClass("hidden");

				$("#notif-keyword").text($(".list-group-item.list-group-item-info").text());
				$("#notif-item").text(a.count);
			}
		});
	}

	function searchProduct(key, page2){
		// location.replace("produk#?cari=" + key + "&hal=1");
		// var url = window.location.href;
		// var split = url.split("?")[1].split("=");
		// split.shift();
		// console.log(split[0]);
		// console.log(url.searchParams.get("cari"));

		var page = getUrlVars()["hal"];
		// console.log(page);

		$("#listContent").empty();
		$("#my-pagination").empty();
		$(".my-alertonoff").removeClass("hidden");
		$.ajax({
			url: "<?=base_url('produk/searchProduct');?>",
			data: {keyword: key.split("+").join(" "), page: page2},
			success: function(a){
				var html = "";
				$.each(a.list, function(index, array){
					// percobaan
					// html += "<div>" + array.VNAMA + "</div>";
					html += "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3'>"
					+ "<div class='offer offer-default'>"
					+ "<div class='posRelative' id='myImgProd'>"
					+ "<img src='<?=base_url();?>" + array.VURL + "'>"
					+ '<a href="javascript:void(0);" data-toggle="modal tooltip" title="Lihat cepat"><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 10px;" data-toggle="modal" data-target="#modal-quicklook" onclick="setmodal(this);" nid="' + array.NID + '"><i class="fa fa-eye"></i></button></a>'
					+ '<a href="<?=base_url('produk/detail/');?>' + array.NID + '" ><button type="button" class="btn btn-default btn-circle btn-sm" style="position: absolute; bottom: -15px; right: 50px;"><i class="fa fa-link"></i></button></a></div>'
					+ '<div class="offer-content">'
					+ '<h5 class="produk-title">'
					+ array.VNAMA
					+ "</h5>"
					+ "<span class='hidden vurl1'>" + array.VURL + "</span>"
					+ "<span class='hidden vurl2'>" + array.VURL2 + "</span>"
					+ "<span class='hidden vurl3'>" + array.VURL3 + "</span>"
					+ "<span class='hidden produk-kategori'>" + array.VNAMA_KTG + "</span>"
					+ "<span class='hidden produk-deskripsi'>" + array.VDESKRIPSI + "</span>"
					+ "</div></div></div>";
					if ((index + 1)%4 == 0) {
						html += "<div class='clearfix'></div>";
					}
				});
				$(html).appendTo("#listContent");

				$("#my-detailImg").empty() // clearance box list detail img
				/* start : init list direktori img detail */
				var detailImg = "";
				$.each(a.img, function(index, array){
					detailImg += '<div nid="' + array.NID_PRODUK + '" vurl="' + array.VURL + '"></div>';
				});
				$(detailImg).appendTo("#my-detailImg");
				/* end : init list direktori img detail */

				var hmtlpage = '<ul class="pagination">';
				var pageAktif = "";
				page = (page == "") ? 1 : page;
				for (var i = 1; i <= a.numpage; i++) {
					pageAktif = (i == page) ? "class='active'" : "";
					hmtlpage += '<li ' + pageAktif + '><a href="#?cari=' + key + '&hal=' + i + '">' + i + '</a></li>';
				}
				hmtlpage += "</ul>";
				$(hmtlpage).appendTo("#my-pagination");

				$(".my-alertonoff").addClass("hidden");

				$("#notif-keyword").text("Pencarian : " + key.split("+").join(" "));
				$("#notif-item").text(a.count);
			}
		});
	}

	function setmodal(obj){
		$(".quicklook-title").html($(".offer-content .produk-title",(obj).closest(".offer")).html());
		$("#my-preview-img img").attr("src", $("img", $(obj).closest("#myImgProd")).attr("src"));
		// $("#gambar div img:eq(0)").attr("src",$(".offer-content .vurl1", $(obj).closest(".offer")).html());
		// $("#gambar div img:eq(1)").attr("src",$(".offer-content .vurl2", $(obj).closest(".offer")).html());
		// $("#gambar div img:eq(2)").attr("src",$(".offer-content .vurl3", $(obj).closest(".offer")).html());

		$("#gambar").empty();// clearance thumbnail
		
		/* start : set thumbnail */
		var html = "<br>";
		$("#my-detailImg div[nid='" + $(obj).attr("nid") + "']").each(function(){
			// $(this).attr("src");
			html += '<div class="col-lg-4">'
			+ '<a href="javascript:void(0);" onclick="clickImg(this)"><img src="' + $(this).attr("vurl") + '" class="width-100" alt="loading ..."></a>'
			+ '</div>';
			// alert($(this).attr("vurl"));
		});
		$(html).appendTo("#gambar");
		/* end : set thumbnail */

		$("#quicklook-deskripsi").html($(".offer-content .produk-deskripsi", $(obj).closest(".offer")).html());
		$("#quicklook-kategori").html($(".offer-content .produk-kategori", $(obj).closest(".offer")).html());
	}

	$("#myFilter").submit(function(){
		var key = $("input[name='search_produk']").val();
		// console.log(key);
		// console.log(encodeURI("ban dis"));
		var encodeKey = key.split(" ").join("+");
		if (key != "") {
			location.replace("produk#?cari=" + encodeKey + "&hal=1");
			// searchProduct(key, 1);
		}
		else{
			alert("keyword pencarian masih kosong");
		}
	});

	$("#my-preview-img .col-lg-4 a").click(function(e){
		e.preventDefault();
		$("#my-preview-img .col-lg-4 a").removeClass("selected");
		$(this).addClass("selected");
		$("#my-main-preview").attr("src", $("img", $(this)).attr("src"));
	});

	// $("select[name='dropdown_itemperpage']").onchange(function(){
	// 	alert("change");
	// });

	function getUrlVars()
	{
	    var vars = [], hass;
	    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	    for(var i = 0; i < hashes.length; i++)
	    {
	        hashs = hashes[i].split('=');
	        vars.push(hashs[0]);
	        vars[hashs[0]] = hashs[1];
	    }
	    return vars;
	}

	function resetsearch(){
		$("input[name='search_produk']").val("");
	}

	function clickImg(obj){
		$("#gambar a").removeClass("selected");
		$(obj).addClass("selected");
		$("#my-main-preview").attr("src", $("img", $(obj)).attr("src"));
	}

	// $("#gambar .col-lg-4 a").click(function(e){
	// 	e.preventDefault();
	// 	// console.log("tes");
	// 	$("#gambar .col-lg-4 a").removeClass("selected");
	// 	$(this).addClass("selected");
	// 	$("#my-main-preview").attr("src", $("img", $(this)).attr("src"));
	// });
</script>
</body>
</html>