<?php

class kamu {
    public static $angka = 1;

    public static function jumlah() {
        $str = "angka " . self::$angka++ . "<br>";
        return $str;
    }
}

$pop1 = new kamu();
$pop2 = new kamu();

echo $pop1->jumlah();
echo $pop1->jumlah();
echo $pop1->jumlah();
echo $pop1->jumlah();

echo $pop2->jumlah();
echo $pop2->jumlah();
echo $pop2->jumlah();
echo $pop2->jumlah();
echo $pop2->jumlah();
