<?php 

require_once 'App/init.php';



$produk1 = new Novel("Kata", "Ntsana", "RintikSedu", 30000, 100 );
$produk2 = new Game("Zombie", "Sonya", "Sonic Computer", 250000, 50 );

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();