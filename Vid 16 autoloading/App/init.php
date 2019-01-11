<?php 


// require_once 'App/Produk/CetakInfoProduk';
// require_once 'App/Produk/Game.php'
// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Novel.php';
// require_once 'App/Produk/Produk';

spl_autoload_register(function( $class) {
	require_once __DIR__ . '/Produk/' . $class . '.php';
});