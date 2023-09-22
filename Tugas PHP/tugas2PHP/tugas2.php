<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP Mochammad Fathan Fadillah</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
error_reporting(0);
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];
    $cetak = $_POST['cetak'];
?>
<body>
    <h1>FORM DATA DIRI</h1>
    <form action="" method="POST">
        <label for="">Nama</label><br>
        <input type="text" name="nama" placeholder="Masukan Nama Anda" id="" ><br><br>
        <label for="">Pekerjaan</label><br>
        <select name="pekerjaan" >
            <option value="">===Pilih Pekerjaan===</option>
            <option value="Dosen">Dosen</option>
            <option value="Presiden">Presiden</option>
            <option value="Mentri">Mentri</option>
            <option value="Pengusaha">Pengusaha</option>
            <option value="Buruh">Dokter</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Arsitek">Arsitek</option>
            <option value="Desainer">Desainer</option>
            <option value="Programmer">Programmer</option>
            <option value="Aktor">Aktor</option>
        </select><br><br>
        <label for="">Hobby</label><br>
        <input type="radio" name="hobby" value="Berenang" id="hobby1">Berenang 
        <input type="radio" name="hobby" value="Bermain Gitar" id="hobby2">Musik 
        <input type="radio" name="hobby" value="Bermain Basket" id="hobby3">Basket 
        <input type="radio" name="hobby" value="Badminton" id="hobby4">Badminton 
        <input type="radio" name="hobby" value="Membaca" id="hobby5">Membaca 
        <input type="radio" name="hobby" value="Game" id="hobby6">game 
        <input type="radio" name="hobby" value="Menulis" id="hobby7">Menulis 
        <input type="radio" name="hobby" value="Mancing" id="hobby8">Mancing 
        <input type="radio" name="hobby" value="Mendaki" id="hobby9">Mendaki 
        <input type="radio" name="hobby" value="Belajar" id="hobby10">Belajar 
        <br>
        <br>
        <input id="button" type="submit" name="cetak" value="Simpan">
    </form>
    <br>
    <?php
    
    if(isset($cetak)){

        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>