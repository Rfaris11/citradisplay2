<!-- common / dipanggil oleh hampir semua page -->
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
                        <a class="dropdown-item" href="<?=base_url('produk');?>">ALL</a>
                    <?php foreach ($navKategori as $idx => $arr) { ?>
                        <a class="dropdown-item" href="<?=base_url('produk#?ktg=').$arr["NID"].'&hal=1';?>"><?=$arr['VNAMA'];?></a>
                    <?php } ?>
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
<script type="text/javascript">
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
</script>