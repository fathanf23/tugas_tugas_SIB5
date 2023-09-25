<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Penilaian</h1>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukan nama" id="">
        <label for="">Mata Kuliah</label>
        <select name="matkul" id="">
            <option value="">===Pilihan Matakuliah===</option>
            <option value="HTML">HTML dan CSS</option>
            <option value="Java Script">Java Script</option>
            <option value="UI UX">UI UX</option>
            <option value="PHP">PHP</option>
        </select>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="Masukan Nilai" id="">
        <button type="submit" name="proses" >Simpan</button>
    </form>
    <hr>
    <hr>
<?php
$nama = $_POST['nama'];
$matakuliah = $_POST['matkul'];
$nilai = $_POST['nilai'];
$tombol = $_POST['proses'];

$ket = ($nilai >= 60) ? "Lulus" : "Gagal";
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
if(isset($tombol)){
?>

<h1>Nama Siswa : <?= $nama?></h1>
<h1>Nilai : <?= $nilai?></h1>
<h1>Mata Kuliah : <?= $matakuliah?></h1>
<h1>Keterangan : <?= $ket?></h1>
<h1>Grade : <?= $grade?></h1>
<h1>Predikat : <?= $predikat?></h1>

<?php } ?>
</body>
</html>