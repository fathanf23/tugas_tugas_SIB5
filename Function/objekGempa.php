<?php
require 'Gempa.php';

    $g1 = new Gempa('Kuningan', 6);
    $g2 = new Gempa('Jakarta', 8);
    $g3 = new Gempa('Medan', 2);
    $g4 = new Gempa('Bali', 3);


    $g1->cetak();
    $g2->cetak();
    $g3->cetak();
    $g4->cetak();

?>