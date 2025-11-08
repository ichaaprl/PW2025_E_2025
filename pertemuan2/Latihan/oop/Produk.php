<?php
// == PARENT CLASS (CLASS INDUK) ==
class Produk {

    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // METHOD YANG AKAN KITA OVERRIDE
    // Ini adalah method 'getInfoProduk' versi PARENT (Umum)
    public function getInfoProduk() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

class Komik extends Produk {
    public $jmlHalaman;
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
        }
    public function getInfoProduk{

        $infoParent = parent ::getInfoProduk();

        return "Komik : {$infoParent} - {$this->jmlHalaman} Halaman.";
    }
}
class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getInfoProduk() {
        $infoParent = parent::getInfoProduk();
        return "Game: {$infoParent} ~ {$this->waktuMain} Jam.";
    }
}

$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('Uncharted', 'Neil', 'Sony', 250000, 50);
echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk1->getInfoProduk();
echo "<hr/>";


echo $produk2->getHarga();

?>
