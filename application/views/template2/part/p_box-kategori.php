<!-- Sidebar -->
<div class="col-lg-3 wow fadeIn" data-wow-delay="0.2s">

    <div class="widget-wrapper" id="listKategori">
        <h4>Kategori:</h4>
        <br>
        <div class="list-group">
        <a href="#?ktg=0&hal=1" class="list-group-item <?php echo ($this->uri->segment(1) == "produk" && ($kategori_aktif == null || $kategori_aktif == "all")) ? "active" : ""; ?>" onclick="resetSearch();">ALL</a>
        <?php foreach ($kategori as $idx => $arr) { ?>
            <a href="#?ktg=<?=$arr["NID"];?>&hal=1" class="list-group-item <?php echo ($kategori_aktif == $arr["NID"]) ? "active" : ""; ?>" onclick="resetSearch();"><?=$arr['VNAMA'];?></a>
        <?php } ?>
        </div>
    </div>

</div>
<!-- /.Sidebar -->