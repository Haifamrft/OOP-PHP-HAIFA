<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$WaktuMain;
		

		public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $WaktuMain = 0 ) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit =$penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->WaktuMain = $WaktuMain;
			

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
	public function getInfoProduk() {
		$str ="Novel: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}

}

class Game extends Produk {
	public function getInfoProduk() {
		$str ="Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->WaktuMain} Jam.";
		return $str;
	}
}




 class CetakInfoProduk {
 	public function cetak( Produk $produk) {
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
 		return $str;
 	}
 }



$produk1 = new Novel("Kata", "Ntsana", "RintikSedu", 30000, 100, 0 );
$produk2 = new Game("Zombie", "Sonya", "Sonic Computer", 250000, 0, 50 );


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>  