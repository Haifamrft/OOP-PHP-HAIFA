<?php 


abstract class Produk {
	private $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit =$penerbit;
			$this->harga = $harga;
			
		}

		public function setJudul( $judul) {
			$this->judul = $judul;
		}

		public function getJudul(){
			return $this->judul;
		}

		public function setPenulis( $penulis) {
			$this->penulis = $penulis;
		}

		public function getPenulis() {
			return $this->penulis;
		}

		public function setPenerbit( $penerbit) {
			$this->penerbit = $penerbit;
		}

		public function setDiskon ( $diskon ) {
			$this->diskon = $diskon;
		}

		public function getDiskon() {
			return $this->diskon;
		}

		public function getPenerbit() {
			return $this->penerbit;
		}

		public function setHarga( $harga) {
			$this->harga = $harga;
		}

		public function getHarga() {
			return $this->harga - ( $this->harga * $this->diskon / 100 );
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit";
		}

		abstract public function getInfoProduk();

		public function getInfo(){
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
		$str = "Novel: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
		$str = "Game : " . $this->getInfo() . " - {$this->WaktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

 	public function cetak() {
 		$str = "DAFTAR PRODUK : <br>";

 		foreach ($this->daftarProduk as $p) {
 			$str .= "- {$p->getInfoProduk()} <br>";
 		}
 		return $str;
 	}
 }



$produk1 = new Novel("Kata", "Ntsana", "RintikSedu", 30000, 100, "Novel" );
$produk2 = new Game("Zombie", "Sonya", "Sonic Computer", 250000, 50, "Game" );

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
 

?>  