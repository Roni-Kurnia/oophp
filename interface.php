<?php

// interface membuat template dan jika mau digunakan method yang ada di dalamnya harus dipakai semua

interface detailProduk {
    public function getInfoP();
}

abstract class produk {
    protected $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon;

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

    abstract public function getInfoP();
}

// komik
class komik extends produk implements detailProduk{
    public $jmlHalaman;

    public function getInfo() {
        $str = "Komik: ". $this->getInfoP() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoP() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $str;
    }
}

// game
class game extends produk implements detailProduk{
    public $play;

    public function getInfo() {
        $str = "Game: ". $this->getInfoP() ." - {$this->play} Jam.";
        return $str;
    }

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $play = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->play = $play;
    }

    public function getInfoP() {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $str;
    }
}

class getInfoLengkap {
    public $daftarProduk = array();

    public function setDProduk(produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk: <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfo()} <br>";
        }

        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Metalgear", "Hideo Kojima", "konami", 230000, 50);

$cetakinfopd = new getInfoLengkap();
$cetakinfopd->setDProduk($produk1);
$cetakinfopd->setDProduk($produk2);
echo $cetakinfopd->cetak();