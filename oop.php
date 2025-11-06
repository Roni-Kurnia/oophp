<?php

/* 
getter & setter:
    1. setter digunakan untuk memperbarui value pada data
    2. getter digunakan untuk mengambil data yang telah diperbarui oeleh setter
*/

class produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga;
    protected $diskon;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
    }

    // judul
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string", 1);
        }
        return $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    // penulis
    public function setPenulis($penulis) {
        if (!is_string($penulis)) {
            throw new Exception("penulis harus string", 1);
        }
        return $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    // penerbit
    public function setPenerbit($penerbit) {
        if (!is_string($penerbit)) {
            throw new Exception("penerbit harus string", 1);
        }
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    // harga
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function diskonHarga() {
        return "total harga: {$this->getHarga()}";
        
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $str;
    }
}

// komik
class komik extends produk {
    public $jmlHalaman;

    public function getInfo() {
        $str = "Komik: ". parent::getInfo() ." - {$this->jmlHalaman} Halaman.";
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

    public function getInfo() {
        $str = "Game: ". parent::getInfo() ." - {$this->play} Jam.";
        return $str;
    }

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $play = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->play = $play;
    }
}

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 50);

echo $produk1->getInfo($produk1);
echo "<br>";
echo $produk2->getInfo($produk2);
echo "<hr>";
$produk1->setDiskon(50);
echo $produk1->diskonHarga();
echo "<br>";
$produk2->setDiskon(50);
echo $produk2->diskonHarga();
echo "<hr>";
$produk1->setJudul("judul lain");
echo $produk1->getJudul();