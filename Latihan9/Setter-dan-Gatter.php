<?php  
// Visibility :  Konsep yan digunakan untuk mengatur akses dari property dan method pada sebuah objek
// ada 3 keyword visibility : public, protected dan private
// public : dapat digunakan dimana saja, bahkan diluar kelas
// protected : hanya dapat digunakan didalam sebuah kelas beserta turunannya
// private : hanya dapat digunakan di dalam sebuah kelas tertentu saja

// Jualan Produk
// Komik
// Game
class Produk {
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
          
    public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
           
     
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        return $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga( $harga ) {
        return $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);

    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }


    // public function sayHello() {
    //     return "Hello Pecinta Komik";
    // }
    public function getLabel() {
             return "$this->penulis, $this->penerbit";
         }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";

        return $str;
    }
}


class komik extends Produk {
    public $jumlahHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
    
}


class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
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
// $Produk2->tambahProperty = "Kocak";
// var_dump($Produk2);

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 125);
$produk2 = new Game("Only up", "Neil Amstrong", "SCKR Games", 30000, 45);

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

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenerbit("Theralll");
echo $produk1->getPenerbit();
