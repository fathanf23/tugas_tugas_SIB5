<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 3</title>
</head>
<body>
    
    <?php
$m1 = ['nim' => '20210910062', 'nama' => 'Mochammad Fathan Fadillah', 'nilai' => 90];
$m2 = ['nim' => '20210910135', 'nama' => 'Dhini', 'nilai' => 90];
$m3 = ['nim' => '20210910063', 'nama' => 'Nazwa Nazeyla', 'nilai' => 80];
$m4 = ['nim' => '20210910064', 'nama' => 'Fidya', 'nilai' => 60];
$m5 = ['nim' => '20210910065', 'nama' => 'Anggraeni', 'nilai' => 40];
$m6 = ['nim' => '20210910066', 'nama' => 'Brian', 'nilai' => 50];
$m7 = ['nim' => '20210910067', 'nama' => 'Andi', 'nilai' => 75];
$m8 = ['nim' => '20210910068', 'nama' => 'Kusnandar', 'nilai' => 62];
$m9 = ['nim' => '20210910069', 'nama' => 'Kirana', 'nilai' => 23];
$m10 = ['nim' => '20210910010', 'nama' => 'Budi', 'nilai' => 87];

$ar_judul  = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    ?>
    <h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
        <?php foreach($ar_judul as $judul){ ?>
            <th><?= $judul ?></th>

            <?php } ?>
            </tr>
        </thead>
    </table>
</body>
</html>