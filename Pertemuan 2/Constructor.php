<?php

// Jualan Produk
// komik
// Game

use Produk as GlobalProduk;

class Produk {
    public $judul = "judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;

    // public function sayHello() {
    //     return "Hello World!";
    // }
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "wkwkwk"; 
// var_dump($produk2->judul);

$produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000 );
$produk3 = new Produk("Dragon Ball");

// var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo $produk3->getLabel();

// echo "<hr>";

// $produk4 = new Produk();
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Komputer";
// $produk4->harga = 250000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);