<?php  

// Jualan Produk
// Komik
// Game
class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

        public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;



            
        }


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

$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000);
$produk2 = new Produk("Only up", "Neil Amstrong", "SCKR Games", 30000);
$produk3 = new produk("Jujutsu Kaisen");
// var_dump($produk3);
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);



