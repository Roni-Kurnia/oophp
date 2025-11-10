<?php

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

?>