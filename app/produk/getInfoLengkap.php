<?php

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

?>