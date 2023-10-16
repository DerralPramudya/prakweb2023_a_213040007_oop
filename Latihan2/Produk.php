<?php  

// Jualan Produk
// Komik
// Game
class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;


    // public function sayHello() {
    //     return "Hello Pecinta Komik";
    // }
    public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }
}

// $Produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Only up";
// $Produk2->tambahProperty = "hahaha";
// var_dump($Produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 35000;

// var_dump($produk3);
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

$produk4 = new Produk();
$produk4->judul = "Only up";
$produk4->penulis = "Neil Amstrong";
$produk4->penerbit = "SCKR Games";
$produk4->harga = 30000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



