<?php
class Jenis_produk{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat table jenis_produk
    public function dataJenis(){
    $sql = "SELECT * FROM jenis_produk";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
    public function simpan($data){
        $sql = "INSERT INTO jenis_produk (nama) values (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data){
        $sql = "UPDATE jenis_produk set nama=? where id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
?>