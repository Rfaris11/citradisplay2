<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>.: Katalog Produk :.</title>

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

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .divider-new {
            margin-top: 0;
        }

        .list-group-item.active {
            background-color: #2bbbad;
            border-color: #2bbbad
        }

        .list-group-item:not(.active) {
            color: #222;
        }

        .list-group-item:not(.active):hover {
            color: #666;
        }
        .card {
            font-weight: 300;
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
        <div class="row">
            <?php $this->load->view("template2/part/p_box-kategori.php") ?>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="divider-new mb-2">
                            <h2 class="h2-responsive">Katalog Produk</h2>
                        </div>
                    </div>
                <?php $this->load->view("template2/part/p_card-produk"); ?>
                </div>
            </div>
        </div>
    </div>
    <!--/.Content-->

    <?php $this->load->view("template2/part/p_view-modal-produk"); ?>

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
    </script>
    <?php $this->load->view("template2/part/p_javascript"); ?>
</body>

</html>