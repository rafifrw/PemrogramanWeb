<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia}tahun?";
?>

<!-- SOAL 23 -->
<!-- Penggunaan tanda @ agar array asosiatif yang tidak berisi nilai tidak eror, jadi dapat ditampilkan -->