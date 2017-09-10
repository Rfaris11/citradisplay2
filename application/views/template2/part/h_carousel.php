<!-- h = home -->

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