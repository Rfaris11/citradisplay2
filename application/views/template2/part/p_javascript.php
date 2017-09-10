<script type="text/javascript">

	var hasktg;
	var hashal;
	var hascari;

	$(document).ready(function(){
        $.ajaxSetup({
            type: "post",
            cache: false,
            dataType: "json"
        });

        hasktg = getUrlVars()["ktg"];
		hashal = (typeof getUrlVars()["hal"] === "undefined") ? 1 : getUrlVars()["hal"];
		hascari = getUrlVars()["cari"];

        (typeof hasktg === "undefined" && typeof hascari !== "undefined") ? searchProduk(hascari, hashal) : getListProdukBykategori(0, hashal);
        // (typeof hasktg === "undefined" && typeof hascari !== "undefined") ? console.log("true") : console.log("else");

        changeKategoriAktif();
    });

    $(window).hashchange(function(){
    	hasktg = getUrlVars()["ktg"];
		hashal = getUrlVars()["hal"];
		hascari = getUrlVars()["cari"];

		changeKategoriAktif();
		if (typeof hasktg !== "undefined") 
			getListProdukBykategori(hasktg, hashal);
		else if (typeof hascari !== "undefined")
			searchProduk(hascari, hashal);
    });

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

	/* bind link kategori */
    function getListProdukBykategori(id, page){
        $.ajax({
            url: "<?=base_url('produk/getallproductperkategori');?>",
            data: {idkategori: id, page: page},
            success: function(a){
                bindCard(a.list, "listProduk");
                bindLibraryDetailImg(a.img, "my-detailImg");
                bindPagination("ktg="+id, a.numpage, page, "pagination");
            }
        });
    }

    /* search */
    function searchProduk(key, page){
        $.ajax({
            url: "<?=base_url('produk/searchProduct');?>",
            data: {keyword: key.split("+").join(" "), page: page},
            success: function(a){
                bindCard(a.list, "listProduk");
                bindLibraryDetailImg(a.img, "my-detailImg");
                bindPagination("cari="+key.split("+").join(" "), a.numpage, page, "pagination");
            }
        });
    }

    /* bind box of product */
    function bindCard(obj, idSelector){
    	var html = "";
    	$.each(obj, function(idx, arr){
            html += '<div class="col-lg-3 mb-4">'
            + '<!--Card-->'
            + '<div class="card wow fadeIn" data-wow-delay="0.2s">'

            + '<!--Card image-->'
            + '<div class="view overlay hm-green-light">'
            + '<img class="img-fluid" src="<?=base_url('assets/uploads/');?>' + arr.VURL + '" alt="' + arr.VNAMA + '">'
            + '<div class="mask waves-effect waves-light">'
            + '</div>'
            + '</div>'


            + '<!--Card content-->'
            + '<div class="card-body py-2 px-2">'
            + '<!--Title-->'
            + '<h5 class="card-title">' + arr.VNAMA + '</h5>'
            + '<a href="<?=base_url('produk/detail/');?>' + arr.NID + '" class="btn btn-sm btn-info px-2 mx-1" nid="' + arr.NID + '"><i class="fa fa-window-restore mr-1"></i>Read more</a>'
            + '<a href="#" class="btn btn-sm btn-outline-info px-2 mx-1" data-toggle="modal" data-target="#modalRegister" onclick="setmodal(this);" nid="' + arr.NID + '"><i class="fa fa-expand mr-1"></i>Quick</a>'
            + '</div>'
            + '</div>'
            + '<!--/.Card-->'
            + '</div>';
        });
        $("#" + idSelector).empty();
        $(html).appendTo("#" + idSelector);
    }

    /* binding temp detail image for quick modal needed*/
    function bindLibraryDetailImg(obj, idSelector){
    	var html = "";
    	$.each(obj, function(idx, arr){
    		html += '<div nid="' + arr.NID_PRODUK + '" vurl="<?=base_url('assets/uploads/');?>' + arr.VURL + '"></div>';
    	});
    	$("#" + idSelector).empty();
    	$(html).appendTo("#" + idSelector);
    }

    /* binding pagination and set highlight active */
    function bindPagination(param1, totalpage, pagenow, idSelector){
    	var html = '<li class="page-item active">Halaman</li>';
    	for (var i = 1; i <= totalpage; i++) {
    		isAktif = (pagenow == i) ? "active" : "";
    		html += '<li class="page-item ' + isAktif + '"><a href="#?' + param1 + '&hal=' + i + '" class="page-link waves-effect waves-effect">' + i + '</a></li>';
    	}
    	$("." + idSelector).empty();
    	$(html).appendTo("." + idSelector);
    }

    /* clear textbox search di navbar */
    function resetSearch(){
        $("input[name='search_produk']").val("");
    }

    /* reset and set highlight kategori aktif */
    function changeKategoriAktif(){
        $("#listKategori .list-group a").removeClass("active");

        if (typeof hasktg === "undefined" && typeof hascari === "undefined") {
            $("#listKategori .list-group a:eq(0)").addClass("active");
        }
        else{
            $("#listKategori .list-group a[href^='#?ktg=" + hasktg + "&hal=1']").addClass("active");
        }
    }

    /* set modal */
    function setmodal(obj){
        $(".modal-content .title #title-text").text($(".card-title", $(obj).closest(".card")).text()); // set title
        $("#body-img1").attr("src", $(".img-fluid", $(obj).closest(".card")).attr("src"));  // set image

        /* start : set list gambar */
        var html = "";
        $("#body-img2").empty();
        $("#my-detailImg div[nid='" + $(obj).attr("nid") + "']").each(function(){
            html += '<div class="col-lg-4">'
            + '<a href="javascript:void(0);" onclick="clickImg(this)"><img src="' + $(this).attr("vurl") + '" class="img-thumbnail" width="100%" alt="loading ..."></a>'
            + '</div>';
            console.log("masuk");
        });
        $(html).appendTo("#body-img2");
        /* end : set list gambar */
    }

    /* click thumbnail img di modal */
    function clickImg(obj){
        /* set indikator image yg di pilih */
        $("#body-img2 a img").removeClass("z-depth-1");
        $("img", obj).addClass("z-depth-1");

        $("#body-img1").attr("src", $("img", $(obj)).attr("src"));
    }
</script>