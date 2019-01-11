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
}

$produk1 = new Produk("Kata", "Ntsana", "RintikSedu". 60000);
$produk2 = new Produk("GezzAnn", "Ntsana", "RintikSedu", 65000);
$produk3 = new Produk("BadBoyFriend");


echo "Novel Best Seller : " . $produk1->getLabel();
echo "<br>";
echo "Novel Ranked: " . $produk2->getLabel();
echo "<br";
var_dump($produk3); 







// echo $produk3->getLabel();

// echo "<hr> ";
?>