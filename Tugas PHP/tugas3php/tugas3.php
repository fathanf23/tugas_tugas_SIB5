<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array 3 Mochammad Fathan Fadillah</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
$m1 = ['nim' => '20210910062', 'nama' => 'Mochammad Fathan Fadillah', 'nilai' => 97];
$m2 = ['nim' => '20210910135', 'nama' => 'Dhini', 'nilai' => 90];
$m3 = ['nim' => '20210910063', 'nama' => 'Nazwa Nazeyla', 'nilai' => 80];
$m4 = ['nim' => '20210910064', 'nama' => 'Fidya', 'nilai' => 60];
$m5 = ['nim' => '20210910065', 'nama' => 'Anggraeni', 'nilai' => 40];
$m6 = ['nim' => '20210910066', 'nama' => 'Brian', 'nilai' => 50];
$m7 = ['nim' => '20210910067', 'nama' => 'Andi', 'nilai' => 75];
$m8 = ['nim' => '20210910068', 'nama' => 'Kusnandar', 'nilai' => 63];
$m9 = ['nim' => '20210910069', 'nama' => 'Kirana', 'nilai' => 23];
$m10 = ['nim' => '20210910010', 'nama' => 'Budi', 'nilai' => 87];

$ar_judul  = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jumlah_nilai);
$ngambil_nilai = count($mahasiswa);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terrendah = min($jumlah_nilai);
$nilai_ratarata = $total_nilai / $ngambil_nilai;

$keterangan = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terrendah' => $nilai_terrendah,
    'Nilai Rata - Rata' => $nilai_ratarata,
    'Jumlah Mahasiswa' => $ngambil_nilai,
    'Jumlah Keseluruhan Nilai' => $total_nilai
];
    ?>
    <h1>DAFTAR NILAI MAHASISWA</h1>
    <table border="1" cellpadding="6" cellspacing="1" >
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs){

                $ket = ($mhs ['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = "A";
                else if($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84) $grade = "B";
                else if($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = "C";
                else if($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade = "D";
                else if($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade = "E";
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
            <tr>
                <th align="center"><?= $no++ ?></th>
                <td><?= $mhs ['nim']?></td>
                <td><?= $mhs ['nama'] ?></td>
                <td align="center"><?= $mhs ['nilai'] ?></td>
                <td align="center"><?= $ket ?></td>
                <th align="center"><?= $grade ?></th>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
            ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>