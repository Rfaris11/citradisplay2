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
                            <!-- <h1 class="h1-responsive">20 Photos to inspire you to visit Tatra Mountains</h1> -->
                            <h1 class="h1-responsive">
                            <?php if ($idx == 0)
                                echo '<i class="fa fa-cubes fa-1x white-text"></i>&nbsp;Variasi Lengkap';
                                else if ($idx == 1)
                                echo '<i class="fa fa-diamond fa-1x white-text"></i>&nbsp;Produk Berkualitas';
                                else if ($idx == 2)                    
                                echo '<i class="fa fa-money fa-1x white-text"></i>&nbsp;Harga Bersaing';
                            ?>
                            </h1>
                        </li>
                        <li>
                            <p>Best places you should see<br>
                            Pemesanan dan Informasi, Hubungi kami di <i class="fa fa-phone fa-1x white-text"></i> (+62) 21 8778 2249
                            </p>
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