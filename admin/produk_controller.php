<?php
include_once 'koneksi.php';
include_once 'Models/Produk.php';

$kode = $_POST ['kode'];
$nama = $_POST ['nama'];
$harga_beli = $_POST ['harga_beli'];
$harga_jual = $_POST ['harga_jual'];
$stok = $_POST ['stok'];
$min_stok = $_POST ['min_stok'];
$jenis_produk = $_POST ['jenis_produk'];

$data = [
    $kode, $nama, $harga_beli, $harga_jual, $stok, $min_stok, $jenis_produk
];

$model = new Produk();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan': $model->simpan($data); break;
    default;
    header('location:index.php?url=Produk');
    break;
}
header('location:index.php?url=Produk');
?>