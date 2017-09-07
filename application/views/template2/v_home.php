<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home</title>

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

</head>

<body>


    <!--Navbar-->
    <?php 
    $ctrl = strtolower($this->uri->segment(1));
    $home['aktif'] = ($ctrl == 'home' || $ctrl == '') ? 'active' : '';
    $home['href'] = ($ctrl == 'home' || $ctrl == '') ? 'javascript:void(0);' : base_url('home');

    $produk['aktif'] = ($ctrl == 'produk') ? 'active' : '';
    $produk['href'] = ($ctrl == 'produk') ? 'javascript:void(0);' : base_url('produk');

    $tentangKami['aktif'] = ($ctrl == 'tentang-kami') ? 'active' : '';
    $tentangKami['href'] = ($ctrl == 'tentang-kami') ? 'javascript:void(0);' : base_url('tentang-kami');
     ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?=$home['href'];?>">Citra Display</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?=$home['aktif'];?>">
                        <a class="nav-link" href="<?=$home['href'];?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item btn-group <?=$produk['aktif'];?>">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk 
                            </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item <?=$tentangKami['aktif'];?>">
                        <a class="nav-link" href="<?=$tentangKami['href'];?>">Tentang kami</a>
                    </li>
                </ul>
                <form class="form-inline" id="myFilter" action="javascript:void(0);" method="POST">
                    <input name="search_produk" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
        <?php foreach ($halfCarousel as $idx => $value) { 
            $url = base_url($value);
         ?>
            <!-- First slide -->
            <div class="carousel-item <?=($idx == 0) ? 'active' : '';?> view hm-black-light" style="background-image: url('<?=$url;?>'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">20 Photos to inspire you to visit Tatra Mountains</h1>
                        </li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <!-- <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">See more!</a> -->
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
            </div>
            <!--/.First slide-->
        <?php } ?>
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
        <!-- added by dev : carousel-->
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <?php foreach ($carousel as $idx => $item) { ?>
                    <li data-target="#carousel-example-2" data-slide-to="0" class="<?=($idx == 0) ? 'active' : ''; ?>"></li>
                <?php } ?>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
            <?php foreach ($carousel as $idx => $arr) { ?>
                <div class="carousel-item <?=($idx == 0) ? 'active' : '';?>">
                    <div class="view">
                        <img class="d-block w-100" src="<?=$arr?>" alt="First slide">
                        <div class="mask"></div>
                    </div>
                    <div class="carousel-caption brown-text">
                        <h3 class="h3-responsive">Title <?=$idx;?></h3>
                        <p><?=filesize($arr);?></p>
                    </div>
                </div>
            <?php } ?>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        <!-- /added by dev : carousel-->

        <!-- added by dev : visi / misi-->
        <div class="col-lg-12">
            <div class="divider-new" style="margin-bottom: 15px;">
                <h2 class="h2-responsive">Citra Display</h2>
            </div>
            <p class="text-center">Selamat Datang di Website PT. Niti Total Makmur. Kami merupakan perusahaan yang berdiri sejak 2009 bergerak dalam industri Layanan Cetak, Banner, Kartu Nama, Sticker, Brosur, Company Profile, 3D Printing. Kami berada di Ruko Elang Laut Boulevard Blok M2 No.20, Pantai Indah Kapuk (PIK). Temukan berbagai produk terbaik kami (Digital Printing, Business Cards, Offset Printing, Brochure / Flyer, Custom Packaging, Banner) dengan kualitas dan harga jual terbaik yang bisa Anda dapatkan.</p>
        </div>
        <!-- /added by dev : visi / misi-->

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
                    <a href="" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Get it now!</a>
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
                    <a href="" class="btn btn-info waves-effect waves-light">Get it now!</a>
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

        <?php 
        $this->load->view("template2/part/h_top-produk"); 
        $this->load->view("template2/part/h_view-modal-produk"); 
        ?>

    </div>
    <!--/.Content-->


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
                        <li><a href="#!"><?=$arr["VNAMA"]; ?></a></li>
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


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/jquery-3.1.1.min.js');?>"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/popper.min.js');?>"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/bootstrap.min.js');?>"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=base_url('assets/template2/js/mdb.min.js');?>"></script>

    <script>
        new WOW().init();
    </script>
<script>
    /* event pencarian */
    $("#myFilter").submit(function(){
        var key = $("input[name='search_produk']").val();
        if (key != "") {
          var base = "<?=base_url('produk');?>";
          window.location.replace(base + "#?cari=" + key.split(" ").join("+") + "&hal=1");
          // location.replace("produk#?cari=" + key + "&hal=1");
          // searchProduct(key, 1);
        }
        else{
          alert("keyword pencarian masih kosong");
        }
    });

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
        // $("#body-img2 a").removeClass("selected");
        // $(obj).addClass("selected");

        $("#body-img1").attr("src", $("img", $(obj)).attr("src"));
    }

</script>

</body>

</html>