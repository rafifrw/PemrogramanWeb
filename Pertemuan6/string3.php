<?php

// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

/** Soal 15
 * -	Fungsi strrev() digunakan untuk membalikkan karakter.
 */

 $pesan = "saya arek malang";
 $pesanPerKata = explode(" ", $pesan);
 $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
 $pesan = implode(" ", $pesanPerKata);

 echo $pesan . "<br>";

/** Soal 16
 * -	Hasil urutan karaktaer dibalik perkata karena fungsi yang dipanggil.
 */
?>