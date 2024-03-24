<?php
$x=75;
$y=25;

function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z;
?>

<!-- SOAL 26
Penggunaan variabel $Global adalah untuk yang menyimpan semua variabel global yang
didefinisikan saat program dijalankan. Jadi hasilnya sesuai dengan kode program yang
diinginkan -->