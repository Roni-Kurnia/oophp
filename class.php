<?php

class produk {
    // membuat properti dengan modifire public
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    // memebuat menthod dengan modifire public
    public function hello() {
        return "nani kore"."<br>";
    }

    // menggunakan $this-> untuk mengubah scope dari properti
    public function label() {
        return $this->judul;
    }
}

// memanggil properti dan menimpanya dengan value yang baru
$produk1 = new produk();
$produk1->judul = "disenchanted";
// var_dump($produk1);

// dapat membuat properti yang tidak ada saat modifire public
$produk2 = new produk();
$produk2->judul = "miside";
// $produk2->rating = "10/10";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "fujimoto";
$produk3->penerbit = "jump";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "metal gear";
$produk4->penulis = "kojima";
$produk4->penerbit = "konami";
$produk4->harga = 230000;

echo "komik: $produk3->judul";

echo "<br>";

// untuk memanggil method harus membuat objek terlebih dahulu
echo $produk3->hello();
echo $produk3->label();
echo "<br>";
echo $produk4->label();