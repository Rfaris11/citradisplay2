<!-- h = home -->

<div class="divider-new mb-0">
    <h2 class="h2-responsive">Produk Rekomendasi</h2>
</div>
<div class="row my-5">

<!--Text-->
<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
<?php 
$delay = 0.2;
foreach ($topproduk as $idx => $arr) { ?>
    <!--First columnn-->
    <div class="col-lg-3 mb-4">
        <!--Card-->
        <div class="card wow fadeIn" data-wow-delay="<?=$delay;?>s">

            <!--Card image-->
            <div class="view overlay hm-green-light">
                <img class="img-fluid" src="<?=base_url('assets/uploads/').$arr['VURL'];?>" alt="<?=$arr['VNAMA']; ?>">
                <div class="mask waves-effect waves-light">
                </div>
            

            <!--Card content-->
            <div class="card-body py-2">
                <!--Title-->
                <h5 class="card-title"><?=$arr['VNAMA'];?></h5>
                <a href="<?=base_url('produk/detail/').$arr['NID'];?>" class="btn btn-sm btn-info px-3" nid="<?=$arr['NID'];?>"><i class="fa fa-window-restore mr-1"></i>Read more</a>
                <a href="#" class="btn btn-sm btn-outline-info px-3" data-toggle="modal" data-target="#modalRegister" onclick="setmodal(this);" nid="<?=$arr['NID'];?>"><i class="fa fa-expand mr-1"></i>Quick</a>
            </div>
            </div>
        </div>
        <!--/.Card-->
    </div>
    <!--First columnn-->
<?php 
$delay += 0.2;
if ($idx%3 == 0) {
    $delay = 0.2;
}
} ?>
    <div id="my-detailImg">
    <?php foreach ($img as $idx) { ?>
        <div nid="<?=$idx['NID_PRODUK'];?>" vurl="<?=base_url('assets/uploads/').$idx['VURL'];?>"></div>
    <?php } ?>
    </div>
</div>

<script>
    /* set modal */
    function setmodal(obj){
        $(".modal-content .title #title-text").text($(".card-title", $(obj).closest(".card")).text()); // set title
        $("#body-img1").attr("src", $(".img-fluid", $(obj).closest(".card")).attr("src"));  // set image

        /* start : set list gambar */
        var html = "";
        $("#my-detailImg div[nid='" + $(obj).attr("nid") + "']").each(function(){
            html += '<div class="col-lg-4">'
            + '<a href="javascript:void(0);" onclick="clickImg(this)"><img src="' + $(this).attr("vurl") + '" class="img-thumbnail" width="100%" alt="loading ..."></a>'
            + '</div>';
        });
        $("#body-img2").empty();
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