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
      html += "<td><button type='button' class='btn btn-info' name='btnEdit' data-toggle='modal'";
      html += "data-target='#modalEditKategori' onclick='getSelectedSearchData(this);' nid='"+ a.list[0].NID +"'>Edit</button>";
      html += "&nbsp;<a href='<?= base_url('Cms_produk/doDeleteMstKategori/')?>"+ a.list[0].NID +"'><button type='button'";
      html += "class='btn btn-danger' name='btnDelete'>Delete</button></a></td>";
      html += "</td></tr>";
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
      html += "<td><button type='button' class='btn btn-info' name='btnEdit' data-toggle='modal'";
      html += "data-target='#modalEditProduk' onclick='getSelectedKategori(this);' nid='"+ a.list[0].NID +"'>Edit</button>";
      html += "&nbsp;<a href='<?= base_url('Cms_produk/doDeleteMasterProduct/')?>"+ a.list[0].NID +"'><button type='button'";
      html += "class='btn btn-danger' name='btnDelete'>Delete</button></a></td>";
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
  var id = $(param).attr("nid");
  $.ajax({
    url:"<?= base_url('Cms_produk/showSelectedKategori');?>",
    data : {id : id},
    success : function(a){
      $("#formUpdateProduk").attr("action","<?=base_url('Cms_produk/doUpdateProduk')?>"+"/"+id);
      /*$("#editkategori").append($("<option value = '"+a.res[0].ID_KATEGORI+"' selected='selected'>"+a.res[0].NAMA_KATEGORI+"</option>"));*/
      $("#editkategori").val(a.res[0].ID_KATEGORI).attr("selected",true).trigger("change");
      //$("#optionKategori option[value='"+a.res[0].ID_KATEGORI+"']").attr("selected",true).val(a.res[0].NAMA_KATEGORI);
      $("input[name='editNama']").val(a.res[0].NAMA_PRODUK);
      $("textarea[name='editDeskripsi']").val(a.res[0].VDESKRIPSI);
      $("textarea[name='editSpesifikasi']").val(a.res[0].VSPESIFIKASI);

      /* start : set bagian gambar */
      var html = "";
      $.each(a.res, function(index,array){
        html += "<div class='col-xs-4 col-md-4 col-lg-4'>"
        html += "<a href='#'><img src='<?=base_url('assets/uploads/');?>" + array.VURL + "' style='width:100%;' alt='Loading . . .'></a>";
        html += "</div>";
      });
      $(html).appendTo("#editGambar");
      /* end : set bagian gambar */
    }
  })
}

function getSelectedSearchData(param){
  $("input, textarea", "#modalEditKategori").val("");
  var id = $(param).attr("nid");
  $.ajax({
    url:"<?= base_url('Cms_produk/showSelectedDataKategori'); ?>",
    data:{id : id},
    success : function(a){
      $("#formUpdateKategori").attr("action","<?=base_url('Cms_produk/doUpdateKategori');?>"+"/"+id);
      $("input[name='editNama']").val(a.res[0].VNAMA);
      $("textarea[name='editDeskripsi']").val(a.res[0].VDESKRIPSI);
    }
  })

}

$('#addAnotherFile').on('click',function(e){
  e.preventDefault();
  var nilai = this.value;
  var namafile = parseInt(nilai)+parseInt('1');
  $("#addAnotherFile").val(namafile);
  $("#countUpload").val(namafile);
  var html = "<tr>";
  html += "<td><input type='file' name='namaAddFileProduk"+namafile+"'></td></tr>";
  $(html).appendTo("#inputFilePlus");
})

$('.modal').on('hidden.bs.modal', function (e) {
  $("#inputFilePlus").empty();
  $("#firstChoose").empty();
  $(this)
    .find("input,textarea,select")
       .val('')
       .end();
})
</script>