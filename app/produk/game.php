<?php

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

?>