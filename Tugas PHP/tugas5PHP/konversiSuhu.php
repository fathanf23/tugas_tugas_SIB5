<?php
class konversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;
    private $hasilKonversi;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
        $this->hasilKonversi = $this->konversi();
    }

    private function konversi() {
        switch ($this->satuanSuhuAwal) {
            case 'Celcius':
                switch ($this->satuanSuhuTujuan) {
                    case 'Fahrenheit':
                        return ($this->besaranSuhu * 9/5) + 32;
                    case 'Rheamur':
                        return $this->besaranSuhu * 4/5;
                    default:
                        return $this->besaranSuhu;
                }
                break;
            case 'Fahrenheit':
                switch ($this->satuanSuhuTujuan) {
                    case 'Celcius':
                        return ($this->besaranSuhu - 32) * 5/9;
                    case 'Rheamur':
                        return ($this->besaranSuhu - 32) * 4/9;
                    default:
                        return $this->besaranSuhu;
                }
                break;
            case 'Rheamur':
                switch ($this->satuanSuhuTujuan) {
                    case 'Celcius':
                        return $this->besaranSuhu * 5/4;
                    case 'Fahrenheit':
                        return ($this->besaranSuhu * 9/4) + 32;
                    default:
                        return $this->besaranSuhu;
                }
                break;
            default:
                return $this->besaranSuhu; 
        }
    }
    public function cetak() {
        echo '<tr>';
        echo '<td>' . $this->satuanSuhuAwal . '</td>';
        echo '<td>' . $this->besaranSuhu . '</td>';
        echo '<td>' . $this->satuanSuhuTujuan . '</td>';
        echo '<td>' . $this->hasilKonversi . '</td>';
        echo '</tr>';
    }
}