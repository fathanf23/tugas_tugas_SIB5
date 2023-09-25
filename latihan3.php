<form method="GET">
    <label for="">Nama :</label>
    <br>
    <input type="text" name="nama" id="">
    <br>
    <label for="">Alamat :</label>
    <br>
    <input type="text" name="alamat" id="">
    <br>
    <input type="submit" name="proses" value="Simpan" id="">

</form>
<?php
// error_reporting(0);
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
// tampilkan setelah form di proses
$proses= $_GET['proses'];
if(isset($proses)){
    echo 'Nama : '.$nama. '<br> Alamat : '.$alamat;
}
?>