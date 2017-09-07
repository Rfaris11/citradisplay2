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
                <img class="img-fluid" src="<?=base_url().$arr['VURL'];?>" alt="<?=$arr['VNAMA']; ?>">
                <div class="mask waves-effect waves-light">
                </div>
            

            <!--Card content-->
            <div class="card-body py-2">
                <!--Title-->
                <h5 class="card-title"><?=$arr['VNAMA'];?></h5>
                <a href="#" class="btn btn-sm btn-info px-3" nid="<?=$arr['NID'];?>"><i class="fa fa-window-restore ml-1"></i>Read more</a>
                <a href="#" class="btn btn-sm btn-outline-info px-3" data-toggle="modal" data-target="#modalRegister" onclick="setmodal(this);" nid="<?=$arr['NID'];?>"><i class="fa fa-expand ml-1"></i>Quick</a>
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
        <div nid="<?=$idx['NID_PRODUK'];?>" vurl="<?=base_url().$idx['VURL'];?>"></div>
    <?php } ?>
    </div>
</div>