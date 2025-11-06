<?php
class produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
    }

    public function cetak() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $str;
    }
}

// komik
class komik extends produk {
    public $jmlHalaman;

    public function cetak() {
        $str = "Komik: ". parent::cetak() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
}

// game
class game extends produk {
    public $play;

    public function cetak() {
        $str = "Game: ". parent::cetak() ." - {$this->play} Jam.";
        return $str;
    }

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $play = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->play = $play;
    }
}

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 50);

echo $produk1->cetak($produk1);
echo "<br>";
echo $produk2->cetak($produk2);

// penggunaan parent::,method() adalah sdebagai overididng 
// penggunaan :: pada overiding berperan sebagai tipe data static