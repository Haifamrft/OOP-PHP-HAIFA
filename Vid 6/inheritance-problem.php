<?php 


class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$WaktuMain,
			$tipe;

		public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0,$jmlHalaman = 0, $WaktuMain = 0, $tipe ) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit =$penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->WaktuMain = $WaktuMain;
			$this->tipe = $tipe;

		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoLengkap(){
		// Novel : Kata | Ntsana, RintikSedu (Rp. 60000) - 100 Halaman.
			$str ="{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			if ($this->tipe == "Novel") {
				$str .= " - {$this->jmlHalaman} Halaman.";

			} else if ( $this->tipe == "Game" ) {
				$str .= " - {$this->WaktuMain} Jam.";
			}

			return $str;
		}
}

 class CetakInfoProduk {
 	public function cetak( Produk$produk) {
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
 		return $str;
 	}
 }



$produk1 = new Produk("Kata", "Ntsana", "RintikSedu", 30000, 100, 0, "Novel");
$produk2 = new Produk("Zombie", "Sonya", "Sonic Computer", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


?>  