<!-- h = home -->

<!-- added by dev : kategori -->
<div class="divider-new mb-0">
    <h2 class="h2-responsive">Kategori</h2>
</div>
<?php foreach ($kategori as $idx => $value) {?>
<?php if ($idx%2 == 0) { ?>
<div class="jumbotron my-4">
    <div class="row wow fadeIn" data-wow-delay="0.3s">
        <div class="col-lg-6">
            <div class="view overlay hm-white-light z-depth-1-half">
                <img src="<?=base_url('assets/template2/images/gambar-dummy/kategori.jpg');?>" class="img-fluid " alt="">
                <div class="mask waves-effect waves-light">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="h2-responsive font-bold"><?=$value['VNAMA'];?></h2>
            <hr>
            <p><?=$value['VDESKRIPSI'];?></p>
            <a href="<?=base_url('produk#?ktg=').$value["NID"].'&hal=1';?>" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Get it now!</a>
        </div>
    </div>
</div>
<?php }else { ?>
<div class="jumbotron my-5">
    <div class="row wow fadeIn" data-wow-delay="0.3s">
        <div class="col-lg-6">
            <h2 class="h2-responsive font-bold"><?=$value['VNAMA'];?></h2>
            <hr>
            <p><?=$value['VDESKRIPSI'];?></p>
            <a href="<?=base_url('produk#?ktg=').$value["NID"].'&hal=1';?>" class="btn btn-info waves-effect waves-light">Get it now!</a>
        </div>
        <div class="col-lg-6">
            <div class="view overlay hm-white-light z-depth-1-half">
                <img src="<?=base_url('assets/template2/images/gambar-dummy/kategori.jpg');?>" class="img-fluid " alt="">
                <div class="mask waves-effect waves-light">
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>
<!-- /added by dev : kategori -->