<?php
$ar_prodi = ['SI' => 'Sistem Informasi','TI' => 'Teknik Informatika', 'TE' => 'Teknik Elektro'];
$ar_skill = ['HTML' => 10, 'CSS' => 10, 'Java Script' => 20, 'RWD' => 20, 'PHP' => 30, 'Laravel' => 40, 'MySql' => 40];
$ar_domisili = ['Jakarta','Bandung','Surabaya','Semarang','Bali','Lainnya'];

?>
<fieldset style="background-color: #919191;">
    <legend>Form Registrasi IT Club</legend>
    <table>
        <thead>
            <th>
                Form Registrasi
            </th>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM :</td>
                    <td><input type="text" name="nim" size="25" id=""></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name="nama" size="25" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki" id="">Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="Perempuan" id="">Perempuan &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>Program Studi :</td>
                    <td>
                        <select name="prodi" id="">
                            <?php
                            foreach($ar_prodi as $prodi =>$v){
                                ?>
                            <option value="<?= $v ?>"><?= $v?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming</td>
                    <td>
                        <?php
                            foreach($ar_skill as $skill => $s){
                                ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>" id=""><?= $skill ?>
                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>
                        <select name="domisili" id="">
                            <?php
                            foreach($ar_domisili as $domisili){
                                ?>
                            <option value="$domisili"><?= $domisili?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
        <tfoot>
            <tr>
                <td><button name="proses" type="submit">SUBMIT</button></td>
            </tr>
        </tfoot>
        </tbody>
        </form>
    </table>
</fieldset>
<hr><hr>
<?php
    if(isset($_POST['proses'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
    
    echo 'NIM : '.$nim;
    echo '<br>Nama : '.$nama;
    echo '<br>Jenis Kelamin : '.$jk;
    echo '<br>Program Studi : '.$prodi;
    $total = 0;
    foreach($skill as $skor){
        //hitung total skor dari pemilihan skill
        $total += $ar_skill[$skor];
    }
    function skor_skill($total){
        if($total >= 100 && $total <= 170){
            return "Sangat Baik";
        }else if($total >= 60 && $total <= 100){
            return "Baik";
        }else if($total >=40 && $total <= 60){
            return "Cukup";
        }else if($total >=0 && $total <= 40){
            return "Kurang";
        }else {
            return "Tidak Memadai";
        }
    }
    echo "<br>Skill : ";
    foreach($skill as $skor){
        echo "$skor ,";
    }
    echo '<br>Total Skor : '.$total;
    echo '<br>Kategori Skill : '.skor_skill($total);
    echo '<br>Domisili : '.$domisili;
    
}
    
?>

