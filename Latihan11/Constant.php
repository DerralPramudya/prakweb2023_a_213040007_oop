<?php  

// Nilai nya tidak dapat berubah sampe program selesai
// ada dua penggunaan di dalam constant 
// yang pertama bisa memakai define tetapi tidak bisa digunakan didalam kelas 
// yang kedua bisa memakai const bisa digunakan di dalam kelas  

// define('NAMA', 'Theralll');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Theralll';

// }

// echo Coba::NAMA;

// echo __FILE__;

// function Coba() {
//     return __FUNCTION__;

// }

// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;