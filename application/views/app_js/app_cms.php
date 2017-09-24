<script type="text/javascript">
/*event onchange di menu daftar produk*/
$('#myDropdown1').on('change', function(e) {
	//alert(this.value);
  e.preventDefault();
	var idMasterProduk = this.value;
  $("#myResultMasterProduct").empty();
  getList(idMasterProduk);
  
});

$('#myDropdownSearchKategori').on('change', function(e) {
  //alert(this.value);
  e.preventDefault();
  var idMasterKategori = this.value;
  $("#myResultMasterKategori").empty();
  getListKategori(idMasterKategori);
  
});

function getListKategori(param){
  $.ajax({
    url:"<?=base_url('Cms_produk/showListKategori');?>" ,
    data : {id : param},
    success : function(a){
      console.log(a.list);
      var html = "<tr>";

      html += "<td>" + a.list[0].VNAMA + "</td>";
      html += "<td>" + a.list[0].VDESKRIPSI + "</td>";
      html += "</tr>";
      $("#myResultMasterKategori").empty();
      $(html).appendTo("#myResultMasterKategori");

    }
  });
}

function getList(param){
  $.ajax({
    url:"<?=base_url('Cms_produk/showListProduct');?>" ,
    data : {id : param},
    success : function(a){
      console.log(a.list);
      var html = "<tr>";

      html += "<td>" + a.list[0].VNAMA + "</td>";
      html += "<td>" + a.list[0].VDESKRIPSI + "</td>";
      /* start : added by wgn94 */
      html += '<td><button type="button" class="btn btn-info" name="btnEdit" data-toggle="modal" data-target="#modalEditProduk" onclick="getSelectedKategori(this);" nid=' + a.list[0].NID + '>Edit</button>&nbsp;';
      html += '<a href="<?= base_url('Cms_produk/doDeleteMasterProduct/')?>' + a.list[0].NID + '"><button type="button" class="btn btn-danger" name="btnDelete">Delete</button></a></td>';
      /* end : added by wgn94 */
      // html += "namaProduk : " + a.list[0].VNAMA+"<br>";
      // html += "deskripsi : " + a.list[0].VDESKRIPSI+"<br>";
      /*html += a.list[0].VNAMA+"&nbsp";
      html +=  a.list[0].VDESKRIPSI;*/
      html += "<tr>";
      $("#myResultMasterProduct").empty();
      $(html).appendTo("#myResultMasterProduct");
    }
  });

}

// $('#mstProdukEdit').on('click', function(e){
//   e.preventDefault();
//   var selectedNid = this.value;
//   getSelectedKategori(selectedNid);
// });

function getSelectedKategori(param){
  /* clear value data sebelumnya */
  $("input, textarea", "#modalEditProduk").val(""); // set each input(texbox), textarea be empty
  $("#editGambar").empty(); // netralisir bagian gambar
  $.ajax({
    url:"<?= base_url('Cms_produk/showSelectedKategori');?>",
    data : {id : $(param).attr("nid")},
    success : function(a){
      $("input[name='editNama']").val(a.res[0].NAMA_PRODUK);
      $("textarea[name='editDeskripsi']").val(a.res[0].VDESKRIPSI);
      $("textarea[name='editSpesifikasi']").val(a.res[0].VSPESIFIKASI);

      /* start : set bagian gambar */
      var html = "";
      $.each(a.res, function(index,array){
        html += "<div class='col-xs-4 col-md-4 col-lg-4'>"
        html += "<a href='#'><img src='<?=base_url();?>" + array.VURL + "' style='width:100%;' alt='Loading . . .'></a>";
        html += "</div>";
      });
      $(html).appendTo("#editGambar");
      /* end : set bagian gambar */
    }
  })
}
</script>