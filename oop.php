<?php

/* 
akses modifire(visibility):
    1. public: dapat diakses semuannya bahkan dari luar kelas sekaipun
    2. private: hanya dapat oleh classs tertentu atau class itu sendiri
    3. protected: hanya dapat diakses oleh parent dan child yang berhubungan
*/

class produk {
    public $judul, 
            $penulis,
            $penerbit;
    
    private $harga;

    protected $diskon;

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

    public function diskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
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

    public function diskonHarga() {
        return "Komik: {$this->getHarga()}";
        
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

    public function diskonHarga() {
        return "Game: {$this->getHarga()}";
        
    }
}

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 50);

echo $produk1->cetak($produk1);
echo "<br>";
echo $produk2->cetak($produk2);
echo "<hr>";
$produk1->diskon(50);
echo $produk1->diskonHarga();
echo "<br>";
$produk2->diskon(50);
echo $produk2->diskonHarga();