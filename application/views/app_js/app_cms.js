$.ajaxSetup({
	cache : false,
	dataType : "json",
	type : "post"
});

/*event onchange di menu daftar produk*/
$('#myDropdown1').on('change', function() {
	//alert(this.value);
	var idMasterProduk = this.value;
  var url = "<?php echo base_url('Cms_produk/showListProduct'); ?> ";
  alert(url);
  /*$.ajax({
  	url:"<?=base_url('Cms_produk/showListProduct');?>" ,
  	data : {id : idMasterProduk},
  	success : function(a){
  		console.log(a.list);
  	}
  });*/
})