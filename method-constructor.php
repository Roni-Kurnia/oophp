<?php

class produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga;
    
    // method construct dijalankan setiap pemanggilan objek
    // jadi tidak perlu untuk mendefinisikan property di objek lagi
    // sebelumnya: produk1->judul = "naruto";
    // memeberikan nilai default pada property
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
    }

    // berfungsi untuk mengembalikan nilai dari value di objek yang menimpa property
    public function label() {
        return "$this->judul,
        $this->penulis, 
        $this->penerbit, 
        $this->harga";
    }
}

$produk1 = new produk("naruto", "Fujimoto", "jump", 30000);
$produk2 = new produk("metal gear", "kojima", "konami", 23000);
$produk3 = new produk("tales");

echo "komik: " . $produk1->label();
echo "<br>";
echo "game : " . $produk2->label();
echo "<br>";
echo "game : " . $produk3->label();