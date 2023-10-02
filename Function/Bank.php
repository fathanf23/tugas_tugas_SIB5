<?php
    class Bank{
        // deklarasi variable didalam class menggunakan access modifier
        protected $norek;
        public $nama;
        private $saldo;
        static $jml=0;
        const BANK = 'Bank Rakyat Indonesia';
        public function __construct($no, $nasabah, $saldo){
            $this->norek = $no;
            $this->nama = $nasabah;
            $this->saldo = $saldo;
            self::$jml++;
        }
        public function setor($uang){
            $this->saldo += $uang;
        }
        public function ambil($uang){
            $this->saldo -= $uang;
        }
        public function cetak(){
            echo '<br><br><b><u>'.self::BANK.'</u></b>';
            echo '<br>No. Rekening : '.$this->norek;
            echo '<br>Nama Nasabah : '.$this->nama;
            echo '<br>Saldo : '.$this->saldo;

        }
    }

?>