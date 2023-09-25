<?php
// contoh looping increment bilangan 1 sampai 10
echo '<br>---------Bilangan 1 Sampai 10----------';
    for($x = 1; $x <= 10; $x++){
        echo '<br> Bilangan 1 Sampai Dengan 10 : '.$x;
    }
echo '<br>--------Bilangan 10 Sampai 1----------- ';
   
    for ($y = 10; $y >= 1; $y--){
        echo '<br> Bilangan : '.$y;
    }
echo '<br>--------Perulangan Menggunakan Whlie--------';
$j = 1;
while($j <= 5){
    echo '<br>Bilangan'.$j;
    $j++;
}
?>