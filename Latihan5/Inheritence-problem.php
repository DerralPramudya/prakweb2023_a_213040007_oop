<?php  

// Jualan Produk
// Komik
// Game
class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jumlahHalaman,
           $waktuMain,
           $tipe;

        public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe = "") {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jumlahHalaman = $jumlahHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
     
        }


    // public function sayHello() {
    //     return "Hello Pecinta Komik";
    // }
    public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }

    public function getInfoLengkap() {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump, (RP.35000) - 125 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= "- {$this->jumlahHalaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= "- {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

// $Produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "Only up";
// $Produk2->tambahProperty = "hahaha";
// var_dump($Produk2);

$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 125, 0, "Komik");
$produk2 = new Produk("Only up", "Neil Amstrong", "SCKR Games", 30000, 0, 45, "Game");

// var_dump($produk3);
// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

