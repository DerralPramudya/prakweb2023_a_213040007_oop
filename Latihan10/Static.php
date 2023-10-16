<?php  

// class ContohStatic {
//     public static $angka = 1;

//     public static function hallo() {
//         return "Hallo " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<hr>";
// echo ContohStatic::hallo();

class Contoh {
    public static $angka = 1;

    public function hallo() {
        return "hallo " . self::$angka++ . " kali. <br>";

    }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();

