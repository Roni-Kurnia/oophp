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

    // membuat method untuk memanggil tipe data object(str)
    // setiap class bisa dipanggil dari file lain
    // method cetak dibatasi hannya dapat memanggil data dari class produk
    public function cetak(produk $produkan) {
        $str = "{$produkan->judul} | {$produkan->penulis}, {$produkan->penerbit} (Rp.{$produkan->harga})";
        return $str;
    }
}

$produk1 = new produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000);
$produk2 = new produk("Metalgear", "Hideo Kojima", "konami", 230000);

echo "komik: " . $produk1->cetak($produk1);
echo "<br>";
echo "game : " . $produk2->cetak($produk2);
