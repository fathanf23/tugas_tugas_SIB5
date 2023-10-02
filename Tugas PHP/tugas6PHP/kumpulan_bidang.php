<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>TUGAS 6 PHP "MENGHITUNG LUAS DAN KELILING BENTUK 2D"</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <?php
        require_once 'Lingkaran.php';
        require_once 'PersegiPanjang.php';
        require_once 'Segitiga.php';

        $lingkaran = new Lingkaran(7);
        $persegiPanjang = new PersegiPanjang(5, 10);
        $segitiga = new Segitiga(6, 8, 5, 6, 7);


        $ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
        $dataGeometri = [
            [1, $lingkaran->namaBidang(),'Luas Jari-Jari : 7', $lingkaran->luasBidang(), $lingkaran->kelilingBidang()],
            [2, $persegiPanjang->namaBidang(), 'Panjang : 5 <br> Lebar : 10', $persegiPanjang->luasBidang(), $persegiPanjang->kelilingBidang()],
            [3, $segitiga->namaBidang(), 'Alas : 6 <br> Tinggi : 8 <br> Sisi 1 : 5 <br> Sisi 2 : 6 <br> Sisi 3 : 7', $segitiga->luasBidang(), $segitiga->kelilingBidang()]
        ];
        ?>

        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataGeometri as $dt) { ?>
                <tr>
                    <?php foreach ($dt as $data) { ?>
                        <td><?= $data ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
