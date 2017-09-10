<!-- common / dipanggil oleh hampir semua page -->
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-lg-6 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-2"><strong>KONTAK</strong></h5>
                <hr class="blue lighten-4 mb-3 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="mb-0"><i class="fa fa-home mr-3"></i> Jl. Lorem Ipsum No. XX, Jakarta-Barat 114400, DKI Jakarta, INDONESIA</p>
                <p class="mb-0"><i class="fa fa-envelope mr-3"></i> info@citradisplay.com</p>
                <p class="mb-0"><i class="fa fa-phone mr-3"></i> +6221 9999 878</p>
                <p class="mb-0"><i class="fa fa-print mr-3"></i> +6221 9999 878</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-6 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-2">Produk Terkini</h5>
                <hr class="blue lighten-4 mb-3 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <ul>
                <?php foreach ($latestProduct as $idx => $arr) { ?>
                    <li><a href="<?=base_url('produk/detail/').$arr['NID'];?>"><?=$arr["VNAMA"]; ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <!--/.Second column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © <?=date("Y");?> <a href="<?=base_url();?>"> citradisplay.com </a>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->