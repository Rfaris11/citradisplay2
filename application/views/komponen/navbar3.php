<link rel="stylesheet" type="text/css" href="<?=base_url('assets/komponen/navbar/navbar3.css');?>">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form action="javascript:void(0);" class="navbar-form navbar-right" method="POST" id="myFilter">
        <div class="input-group">
          <input type="text" name="search_produk" class="form-control" placeholder="Search Produk">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav">
        <li <?php if(strtolower($this->uri->segment(1)) == "home" || strtolower($this->uri->segment(1)) == "") echo "class='active'" ?>><a href="<?=base_url('home');?>"><b>Home</b></a></li>
        <li <?php if(strtolower($this->uri->segment(1)) == "produk") echo "class='active'" ?>><a href="<?=base_url('produk');?>"><b>Produk</b></a></li>
        <li <?php if(strtolower($this->uri->segment(1)) == "tentang-kami") echo "class='active'" ?>><a href="<?=base_url('tentang-kami');?>"><b>Tentang Kami</b></a></li>
      </ul>
    </div>
  </div>
</nav>