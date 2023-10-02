<?php
require_once 'Abstract.php';

class Segitiga  extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $sisi1;
    public $sisi2;
    public $sisi3;
    
    public function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
        $this->sisi3 = $sisi3;
    }
    public function namaBidang(){
        return 'Segitiga';
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
        return $keliling;
    } 

}

?>