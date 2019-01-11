<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga;
		

		public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit =$penerbit;
			$this->harga = $harga;
			
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoProduk(){
			$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			return $str;
		}
}

class Novel extends Produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

		 parent::__construct( $judul, $penulis, $penerbit, $harga );

		 $this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk() {
		$str ="Novel: " . parent ::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}

}

class Game extends Produk {
	public $WaktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0, $WaktuMain = 0) {

	 parent::__construct( $judul, $penulis, $penerbit, $harga );

	 	$this->WaktuMain = $WaktuMain;
	}

	public function getInfoProduk() {
		$str ="Game : " . parent::getInfoProduk() . " - {$this->WaktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
 	public function cetak( Produk $produk) {
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
 		return $str;
 	}
 }



$produk1 = new Novel("Kata", "Ntsana", "RintikSedu", 30000, 100 );
$produk2 = new Game("Zombie", "Sonya", "Sonic Computer", 250000, 50 );


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>  