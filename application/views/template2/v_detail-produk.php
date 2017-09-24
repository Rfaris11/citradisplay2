<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>.: <?=$header['VNAMA']; ?> :.</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/template2/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?=base_url('assets/template2/css/mdb.min.css');?>" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

    <!-- JQuery -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/jquery-3.1.1.min.js');?>"></script>

</head>

<body>


    <!--Navbar-->
    <?php $this->load->view("template2/komponen/navbar"); ?>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <?php $this->load->view("template2/komponen/half-carousel"); ?>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
       <div class="row">
            <div class="col-lg-12">
                <div class="divider-new mb-2 mt-3">
                    <h2 class="h2-responsive">Detail Produk</h2>
                </div>
                <br>
            </div>
            <div class="col-lg-5">
                <img src="<?=base_url('assets/uploads/').$header['VURL'];?>" width="100%" class="img-thumbnail" id="body-img1">
            </div>
            <div class="col-lg-7">
                <h4><?=$header['VNAMA']; ?></h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-newspaper-o mr-1"></i>Uraian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-file-image-o mr-1"></i>Gambar</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content card px-3">
                    <!--Panel 1-->
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                        <br>
                        <label>Deskripsi :</label>
                        <p class="pl-3"><?=$header['VDESKRIPSI']; ?></p>
                        <label>Kategori :</label>
                        <p class="pl-3"><?=$header['VNAMA_KTG']; ?></p>
                    </div>
                    <!--/.Panel 1-->
                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <br>
                        <div class="row pb-3" id="body-img2">
                        <?php foreach ($img as $idx => $arr) { ?>
                            <div class="col-lg-4">
                                <a href="javascript:void(0);" onclick="clickImg(this)">
                                    <img src="<?=base_url('assets/uploads/').$arr['VURL'];?>" class="img-thumbnail" width="100%" alt="img - <?=$header['VNAMA'].'-'.$idx;?>">
                                </a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <!--/.Panel 2-->
                </div>
            </div>
       </div> 
    </div>
    <!--/.Content-->

    <!--Footer-->
    <?php $this->load->view("template2/komponen/footer"); ?>
    <!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/popper.min.js');?>"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/bootstrap.min.js');?>"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/mdb.min.js');?>"></script>

    <!-- Jquery Hashchange -->
    <script type="text/javascript" src="<?=base_url('assets/etc/js/jquery.ba-bbq.min.js');?>"></script>
    <script>
        new WOW().init();
        /* click thumbnail img di modal */

        function clickImg(obj){
            /* set indikator image yg di pilih */
            $("#body-img2 a img").removeClass("z-depth-1");
            $("img", obj).addClass("z-depth-1");

            $("#body-img1").attr("src", $("img", $(obj)).attr("src"));
        }
    </script>
</body>

</html>