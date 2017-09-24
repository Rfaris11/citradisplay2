<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>.: Tentang Kami :.</title>

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
                    <h2 class="h2-responsive">Tentang Kami</h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-center mb-3">
                    <img src="<?=base_url('assets/images/tentang_kami/Logo_CPM.jpg');?>">
                </div>
                <p>Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor. Lorem ipsum sit dolor.</p>
                <br>
                <p class="mb-0"><i class="fa fa-home mr-3"></i> Jl. Lorem Ipsum No. XX, Jakarta-Barat 114400, DKI Jakarta, INDONESIA</p>
                <p class="mb-0"><i class="fa fa-envelope mr-3"></i> info@citradisplay.com</p>
                <p class="mb-0"><i class="fa fa-phone mr-3"></i> +6221 9999 878</p>
                <p class="mb-0"><i class="fa fa-print mr-3"></i> +6221 9999 878</p>
            </div>
            <div class="col-lg-4">
                <div id="map" style="width:400px;height:400px;">My map will go here</div>
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
    </script>
    <script type="text/javascript">
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(-6.269521, 106.831041),
            zoom: 15
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:mapOptions.center});
        marker.setMap(map);
        google.maps.event.addListener(marker,'click',function() {
            var infowindow = new google.maps.InfoWindow({
              content:"PT XSIS wkwkwk, Jl. Warung Jati Barat No. 63"
            });
            infowindow.open(map,marker);
        });
    } 
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA185dpenYNhUUZMSsjz8MpyDhI_kNVNc&callback=myMap"></script>
</body>

</html>