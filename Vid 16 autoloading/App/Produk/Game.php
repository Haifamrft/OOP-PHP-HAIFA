<?php 

 class Game extends Produk implements InfoProduk {
	public $WaktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0, $WaktuMain = 0) {

	 parent::__construct( $judul, $penulis, $penerbit, $harga );

	 	$this->WaktuMain = $WaktuMain;
	}

	public function getInfo(){
		$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . " - {$this->WaktuMain} Jam.";
		return $str;
	}
}
