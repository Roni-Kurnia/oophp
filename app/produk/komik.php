<?php

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

?>