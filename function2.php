<?php
//contoh fungsi void atau tidak mengembalikan nilai / dan kita buat sendiri
function salam(){//deklarasi fungsi salam()
    echo '<br>Selamat Pagi Teman-Teman';
}
function sapa($kawan){
    echo '<br>Selamat Pagi '.$kawan;
}
function kabar($kawan='Budi'){
    echo '<br>Hai Apa Kabar '.$kawan;
}


salam();//eksekusi fungsi salam()

$nama = 'Fathan';
sapa($nama);//ini pemanggilan variable baru
sapa('Dhini');//pemanngilan value dari parameter $kawan
kabar();//menampilkan parameter dari value $kawan
kabar('Fidya');//mengubah variable kawan

echo  '<hr>';

// fungsi mengecek bilangan prima
function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
return $prima;
}
if (prima(7)){
    echo '<br>Bilangan Prima';
} else{
    echo '<br>Bukan Bilangan Prima';
}
?>