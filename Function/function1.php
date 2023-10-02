<?php
$str = 'Belajar PHP di Kampus Merdeka';
echo $str;

$str = strtoupper($str);//Fungsi agar isi dari string itu hurufnya Besar semua
echo '<br>' .$str;

$str = strtolower($str);
echo '<br>' >$str;

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
sort($ar_buah);//Fungsi agar isi dari array diurutkan berdasarkan Abjad A-Z
foreach ($ar_buah as $buah){
    echo '<br>' .$buah;
}
echo '<hr>';
arsort($ar_buah);//Fungsi agar isi dari array diurutkan terbalik berdasarkan abjad Z-A
foreach ($ar_buah as $buah){
    echo '<br>' .$buah;
}
?>