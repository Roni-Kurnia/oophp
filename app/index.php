<?php

require_once 'init.php';

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 50);

$cetakinfopd = new getInfoLengkap();
$cetakinfopd->setDProduk($produk1);
$cetakinfopd->setDProduk($produk2);
echo $cetakinfopd->cetak();

?>