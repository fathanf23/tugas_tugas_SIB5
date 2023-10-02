<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';

$d1 = new Dosen('Budi','L','011111','M.Kom');
$m1 = new Mahasiswa('Mochammad Fathan Fadillah','L',5,'SI');
$s1 = new Staff('Ari','L','Marketing','0202',1000000);

$data = [$d1,$m1,$s1];
echo '<h3>Data Civitas Kampus </h3>';
echo '<p>';
foreach ($data as $dt){
    echo $dt->cetak();
}
echo '</p>';

?>