<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 1</title>
</head>
<body>
<?php
    // contoh array 1 dimensi atau scalar
    $ar_buah = ['pepaya','mangga','pisang','jambu'];
    // menambahkan index
    $ar_buah[] = 'naga';
    $ar_buah[] = 'durian';
    $ar_buah[2] = 'nanas';//mengganti index ke 2
    unset ($ar_buah [3]);//menghapus index

    echo '<br> cetak data array menggunakan looping foreach';
    foreach($ar_buah as $id => $buah){
        echo '<br> key array buah : '.$id;
    }
    foreach($ar_buah as $buah){
        echo '<br> Data Buah : '.$buah;
    }
    foreach($ar_buah as $buah){
        echo '<br> Buah dengan id : ' .$id. ' adalah buah '.$buah;
    }
?>
</body>
</html>