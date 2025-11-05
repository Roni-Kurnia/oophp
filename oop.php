<?php
class produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $play,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $play = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->play = $play;
        $this->tipe = $tipe;
    }

    // menambahkan data "tipe" pada program 
    // ini menjadi masalah jika konfigurasi menjadi sangat banyak akan menjadi tidak efisien
    public function cetak(produk $produkan) {
        $str = "{$produkan->tipe} : {$produkan->judul} | {$produkan->penulis}, {$produkan->penerbit} (Rp.{$produkan->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "game") {
            $str .= " - {$this->play} Jam.";
        };
        return $str;
    }
}

$produk1 = new produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new produk("Metalgear", "Hideo Kojima", "konami", 230000, 0, 50, "game");

echo $produk1->cetak($produk1);
echo "<br>";
echo $produk2->cetak($produk2);
