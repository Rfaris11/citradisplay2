<script type="text/javascript">
/*event onchange di menu daftar produk*/
$('#myDropdown1').on('change', function(e) {
	//alert(this.value);
  e.preventDefault();
	var idMasterProduk = this.value;
  $("#myResultMasterProduct").empty();
  getList(idMasterProduk);
  
});

function getList(param){
  $.ajax({
    url:"<?=base_url('Cms_produk/showListProduct');?>" ,
    data : {id : param},
    success : function(a){
      console.log(a.list);
      var html = "<tr>";

      html += "<td>" + a.list[0].VNAMA + "</td>";
      html += "<td>" + a.list[0].VDESKRIPSI + "</td>";
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
</script>