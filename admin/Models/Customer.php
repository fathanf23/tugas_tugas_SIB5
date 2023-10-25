<?php
class Customer{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat table jenis_produk
    public function dataCustomer(){
    $sql = "SELECT * FROM customer";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}
?>