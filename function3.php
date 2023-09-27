<?php
function tambah($a,$b){
    $c = $a + $b;
    return $c;
    
}

//eksekusi
$x = 20;
$y = 30;

echo 'Hasil dari 20 + 30 = '.tambah(20,30);//eksekusi value dari parameter
echo '<br>Hasil dari X + Y = '.tambah($x,$y);
?>