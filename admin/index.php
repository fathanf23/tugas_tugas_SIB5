<?php
include_once 'koneksi.php';
include_once 'Models/Jenis_produk.php';
include_once 'Models/Kartu.php';
include_once 'Models/Produk.php';
// include_once 'Models/Customer.php';
include_once 'top.php';
include_once 'menu.php';
// include_once 'about.php';
// include_once 'contact.php';

// include 'data.php';
?>
<div>
<div class="container-fluid px-4">
        <!-- <h1>Selamat Datang di halaman Admin</h1> -->
        <?php
        // error_reporting(0);
        // membuat logik sederhana untuk mengarahkan url ke file
        // yang mempunyai extension .php
        // routing => file yang mengarahkan url
        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        }else if (!empty($url)){
            include_once ''.$url.'.php';
        }else{
            include_once 'dashboard.php';
        }
        ?>
    </div>
</div>
<div>
<?php

include_once 'buttom.php';
?>