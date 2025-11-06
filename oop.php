<?php

// ini class parent
class produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $play;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $play = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->play = $play;
    }

    public function getLabel() {
        $str = "{$this->penulis}, {$this->penerbit}";
        return $str;
    }

    public function cetak() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

// ini class child
class komik extends produk {
    public function cetak() {
        $str = "Komik: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// ini class child
class game extends produk {
    public function cetak() {
        $str = "Game: {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->play} Jam.";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 0, 50);

echo $produk1->cetak($produk1);
echo "<br>";
echo $produk2->cetak($produk2);

// class child akan mewarisi semua property dan method calss parent
// class child dapat memperluas fungsionalitas dari class parent secara private