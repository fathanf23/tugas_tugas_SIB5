<?php
$objJenis = new Jenis_produk();
$rs = $objJenis->dataJenis()
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="jenis_controller.php" method="POST">
    <h2 align="center">Isi Nama Jenis Produk</h2>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nama</label> 
    <div class="col-10">
      <input id="text1" placeholder="Isi Nama Jenis Produk"  name="nama" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>