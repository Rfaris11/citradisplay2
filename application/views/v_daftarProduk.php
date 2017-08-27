<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Citra Display | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/ionicons-2.0.1/css/ionicons.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/plugins/select2/select2.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('home'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>DY</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Citra</b>Display</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span><?= $this->session->userdata('sessionUser'); ?></span>
            </a>
            <ul class="dropdown-menu">
                <div class="pull-right">
                  <a href="<?= base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?= base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview active">
          <a href="<?= base_url('admin/daftarProduk'); ?>">
            <i class="fa fa-cube"></i> <span>Daftar Produk</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-cube"></i> Daftar Produk</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Pencarian Produk</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Produk</label>
                <select name="listMstProduk" id="myDropdown1" class="form-control select2" style="width: 100%;">
                <?php foreach ($data as $r) {
                ?>
                  <option value="<?= $r['NID']; ?>"><?= $r['VNAMA']; ?></option>
                <?php } ?>
                </select>
              </div>
            </div>
            </div>
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        <!-- end box -->
        <div class="row list" style="margin-bottom: 10px;">
          <span class="col-md-12" style="text-align:right;">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalAddProduk"><i class="fa fa-plus"></i>&nbsp;Tambah Baru</button>
          </span>
        </div>

        <!-- data table master produk -->

        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Produk</h3>
          <?php if($this->session->flashdata('msgAction')){
            echo "<br/><br/><h4 class='box-title' style='color: red'>".$this->session->flashdata('msgAction')."</h4>";
            } ?>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
                  <table class="table table-bordered">
                <tr>
                  <!-- <th style="width: 10px">#</th> -->
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                <tbody id="myResultMasterProduct">
                <?php foreach ($data as $res) { $selectedNidMstProduk = $res['NID'];?>
                <tr>
                  <!-- <td><?= $i; ?></td> -->
                  <td><?= $res['VNAMA']; ?></td>
                  <td><?= $res['VDESKRIPSI']; ?></td>
                  <td><button type="button" class="btn btn-info" name="btnEdit" data-toggle="modal" data-target="#modalEditProduk" onclick="getSelectedKategori(this);" nid='<?=$res["NID"];?>'>Edit</button>&nbsp;
                  <a href="<?= base_url('Cms_produk/doDeleteMasterProduct/').$res['NID']; ?>"><button type="button" class="btn btn-danger" name="btnDelete">Delete</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
            </div>
            <!-- /.col -->
          </div>

          <!-- /.row -->
        </div>
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php if(date("Y")==2017){ echo date("Y"); }else{ echo "2017 - ".date("Y");} ?><a href="https://www.facebook.com/r.f.hermawan" target="_blank"> NeVa Web Consultant</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets/dashboard/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/dashboard/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/dashboard/plugins/select2/select2.full.min.js'); ?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= base_url('assets/dashboard/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- iCheck 1.0.1 -->
<!-- <script src="../../plugins/iCheck/icheck.min.js"></script> -->
<!-- FastClick -->
<script src="<?= base_url('assets/dashboard/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dashboard/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dashboard/dist/js/demo.js'); ?>"></script>
<!-- Page script -->
<script type="text/javascript">
  $(document).ready(function () {
    $.ajaxSetup({
  cache: false,
  dataType: "json",
  type: "post"
});
    //Initialize Select2 Elements
    $(".select2").select2();

  });
</script>

<!-- modal edit mstproduk -->
<div class="modal fade" id="modalEditProduk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                      <form>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="col-sm-3">Kategori Produk : </td>
                                    <td><select class="form-control select2" name="editkategori" style="width: 100%">
                                    <?php foreach ($dataKategori as $result) { ?>
                                    <option value="<?= $result['NID']; ?>"><?= $result['VNAMA']; ?></option>
                                    <?php } ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Nama Barang :</td>
                                    <td><input class="form-control" type="text" name="editNama"></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Deskripsi :</td>
                                    <td><textarea class="form-control" name="editDeskripsi"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Spesifikasi :</td>
                                    <td><textarea class="form-control" name="editSpesifikasi"></textarea></td>
                                </tr>
                            </tbody>
                            </form>
                        </table>
                        <div id="editGambar">
                          
                        </div>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&nbsp;Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- end modal edit mstproduk -->

<!-- modal add mstproduk -->
<div class="modal fade" id="modalAddProduk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-plus-square-o"></i>&nbsp;Tambah Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                      <form method="post" action="<?= base_url('cms_produk/doUploadFile'); ?>" enctype="multipart/form-data">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td class="col-sm-3">Kategori Produk : </td>
                                    <td><select class="form-control select2" name="addKategori" style="width: 100%">
                                    <?php foreach ($dataKategori as $result) { ?>
                                    <option value="<?= $result['NID']; ?>"><?= $result['VNAMA']; ?></option>
                                    <?php } ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Nama Barang :</td>
                                    <td><input class="form-control" type="text" name="addNama"></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Deskripsi :</td>
                                    <td><textarea class="form-control" name="addDeskripsi"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-3">Spesifikasi :</td>
                                    <td><textarea class="form-control" name="addSpesifikasi"></textarea></td>
                                </tr>
                                <tr>
                                  <td class="col-sm-3">Upload File :</td>
                                  <td><input type="file" name="fileProduk"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" class="btn btn-sm btn-primary">&nbsp;Save</button></a>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&nbsp;Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- end modal add mstproduk -->

<?php $this->load->view('app_js/app_cms');?>
</body>
</html>