<?php
$nama = "Mochammad Fathan Fadillah";
$nilai = 85;
if($nilai >= 85 && $nilai <= 100) $grade = "A";
else if($nilai >= 75 && $nilai <= 84) $grade = "B";
else if($nilai >= 60 && $nilai <= 7) $grade = "C";
else if($nilai >= 30 && $nilai <= 59) $grade = "D";
else if($nilai >= 0 && $nilai <= 29) $grade = "E";
else $grade = "";
switch($grade){
    case "A" : $predikat = "Memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default : $predikat = '';
}

?>
<h1>Nama Siswa : <?= $nama?></h1>
<h1>Nilai : <?= $nilai?></h1>
<h1>Grade : <?= $grade?></h1>
<h1>Predikat : <?= $predikat?></h1>