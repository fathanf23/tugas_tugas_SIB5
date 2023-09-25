<hr><hr>
<?php
// ini adalah contoh komentar pho
// echo 'Hello World';
echo 'Ini Adalah Pemanggilan Variable Langsung Dalam PHP';
echo '<br>';
// latihan membuat variable di php
$namaSiswa = "Mochammad Fathan Fadillah"; //tipe data string
$umur = 20; //tipe data integer
$beratBadan = 74.1; //tipe data float
$_pekerjaan = 'Mahasiswa';

$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo '<br>Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan;
echo '<br>Pekerjaan : '.$_pekerjaan;
echo '<br>Berat Badan 2 : $beratBadan kg';
echo "<br>Berat Badan 3 :  $beratBadan ";
print '<br> Pekerjaan 2 : '.$_pekerjaan;
// contoh pemanggilan variable dalam php
?>
<hr><hr>
Ini Adalah Pemanggilan Variable PHP Di Dalam HTML
<br>
<br>Siswa : 1 : <?= $namaSiswa?>;
<p>Umur : <?= $umur?></p>
<p>Berat Badan : <?= $beratBadan?> </p>
<p>Pekerjaan : <?= $_pekerjaan ?></p>
<p>Luas Jari Jari Diatas Adalah <?= $luas ?></p>
<hr><hr>