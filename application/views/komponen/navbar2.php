<link rel="stylesheet" type="text/css" href="<?=base_url('assets/komponen/navbar.css');?>">
<nav class="navbar">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>                        
  </button>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=base_url();?>"><b>Logo / Nama</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form action="javascript:void(0);" onsubmit="alert('under development'); console.log('under development');" class="navbar-form navbar-right">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
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