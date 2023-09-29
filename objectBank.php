<?php
    require 'Bank.php';

    $n1 = new Bank('001','Mochammad Fathan Fadillah', 250000);
    $n2 = new Bank('002','Dhini Fidya Anggraeni', 150000);
    $n3 = new Bank('003','Nazwa Nazeyla', 50000);
    $n4 = new Bank('004','Andi', 70000);
    $n5 = new Bank('005','Andra', 95000);

    $n1->setor(250000);
    $n2->ambil(50000);
    echo '<h3 align="center">'.Bank::BANK.'</h3>';
    $n1->cetak();
    $n2->cetak();
    $n3->cetak();
    $n4->cetak();
    $n5->cetak();

?>