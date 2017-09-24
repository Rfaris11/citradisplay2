<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>.: Home :.</title>

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
        <?php 
        $this->load->view("template2/part/h_carousel");
        ?>

        <!-- added by dev : visi / misi-->
        <div class="col-lg-12">
            <div class="divider-new" style="margin-bottom: 15px;">
                <h2 class="h2-responsive">Citra Display</h2>
            </div>
            <p class="text-center">Selamat Datang di Website PT. Niti Total Makmur. Kami merupakan perusahaan yang berdiri sejak 2009 bergerak dalam industri Layanan Cetak, Banner, Kartu Nama, Sticker, Brosur, Company Profile, 3D Printing. Kami berada di Ruko Elang Laut Boulevard Blok M2 No.20, Pantai Indah Kapuk (PIK). Temukan berbagai produk terbaik kami (Digital Printing, Business Cards, Offset Printing, Brochure / Flyer, Custom Packaging, Banner) dengan kualitas dan harga jual terbaik yang bisa Anda dapatkan.</p>
            <hr>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <i class="fa fa-cubes fa-5x blue-text" aria-hidden="true"></i>
                    <p><b><u>Variasi pilihan lengkap</u></b></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-diamond fa-5x brown-text" aria-hidden="true"></i>
                    <p><b><u>Produk berkualitas</u></b></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-money fa-5x green-text" aria-hidden="true"></i>
                    <p><b><u>Harga bersaing</u></b></p>
                </div>
            </div>
        </div>
        <!-- /added by dev : visi / misi-->

        <?php 
        $this->load->view("template2/part/h_kategori");
        $this->load->view("template2/part/h_top-produk"); 
        $this->load->view("template2/part/h_view-modal-produk"); 
        ?>
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

    <script>
        new WOW().init();
    </script>

</body>

</html>