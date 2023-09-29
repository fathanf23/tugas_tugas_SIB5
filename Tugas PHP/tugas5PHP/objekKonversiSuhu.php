<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
require 'konversiSuhu.php';

$dataKonversiSuhu = array(
    new konversiSuhu('Celcius', 30, 'Fahrenheit'),
    new konversiSuhu('Fahrenheit', 90, 'Celcius'),
    new konversiSuhu('Celcius', 50, 'Rheamur'),
    new konversiSuhu('Rheamur', 55, 'Celcius')
);
echo '<table border="1">';
echo '<tr>';
echo '<th>Satuan Suhu Awal</th>';
echo '<th>Besaran Suhu</th>';
echo '<th>Satuan Suhu Tujuan</th>';
echo '<th>Hasil Konversi Suhu</th>';
echo '</tr>';
foreach ($dataKonversiSuhu as $konversi) {
    $konversi->cetak();
}
echo '</table>';
?>
</body>
</html>