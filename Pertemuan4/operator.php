<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//Penambahan kode untuk menampilkan hasil
echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";
echo "<hr>";

/** SOAL 3.1
* Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.1) Catat di sini apa yang anda amati
* JAWAB
* Pada kode PHP tersebut menggunakan jenis operator aritmatika. Untuk menampilkannya menggunakan perintah echo.
*/

// Penambahan kode yang berisi opererator pembanding pada file operator.php
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Penambahan kode untuk menampilkan hasil
echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br>";
echo "<hr>";

/**	SOAL 3.2
 * Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan/refresh  localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.2) Catat di sini apa yang anda amati
 * JAWAB
 * Pada kode PHP tersebut menggunakan jenis operator pembanding. Untuk menampilkannya menggunakan perintah echo.
 */

// Penambahan kode dengan jenis operator logika pada file operator.php
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Penambahan kode untuk menampilkan hasil
echo "Hasil Operasi AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil Operasi OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil Operasi NOT a: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil Operasi NOT b: " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<hr>";

/** SOAL 3.3
 * Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan/refresh  localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.3) Catat di sini apa yang anda amati
 * JAWAB
 * Pada kode PHP tersebut menggunakan jenis operator logika. Untuk menampilkannya menggunakan perintah echo.
 */

// Penambahan kode dengan jenis operator penugasan
// Penambahan kode untuk menampilkan hasil
$a += $b;
echo "Hasil Operasi Penugasan +=: $a <br>";
$a -= $b;
echo "Hasil Operasi Penugasan -=: $a <br>";
$a *= $b;
echo "Hasil Operasi Penugasan *=: $a <br>";
$a /= $b;
echo "Hasil Operasi Penugasan /=: $a <br>";
$a %= $b;
echo "Hasil Operasi Penugasan %=: $a <br>";
echo "<hr>";

/** SOAL 3.4
* Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan/refresh  localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.4) Catat di sini apa yang anda amati
* JAWAB
* Pada kode PHP tersebut menggunakan jenis operator penugasan. Untuk menampilkannya menggunakan perintah echo
*/

// Penambahan kode dengan jenis operator identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Penambahan kode untuk menampilkan hasil
echo "Hasil Operasi Identik ===: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil Operasi Tidak Identik !==: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
echo "<hr>";

/**SOAL 3.5
* Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan/refresh  localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.5) Catat di sini apa yang anda amati
* JAWAB
* Pada kode PHP tersebut menggunakan jenis operator identik. Untuk menampilkannya menggunakan perintah echo.
*/

/**
 * Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?
 * Buat kode program untuk langkah 16 dan tampilkan hasilnya di bawah ini beserta kode programnya
 */
// Variabel yang menyimpan total jumlah kursi yang tersedia di ruangan.
    $totalKursi = 45;

// Variabel yang menyimpan jumlah kursi yang sudah ditempati oleh pengunjung.
    $kursiDitempati = 28;

// Variabel yang menghitung jumlah kursi yang masih kosong.
    $kursiKosong = $totalKursi - $kursiDitempati;

// Variabel perhitungan persentase kursi yang masih kosong.
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil persentase kursi yang tersisa.
    echo "Presentase kursi kosong = {$persentaseKosong} <br>";
    echo "<hr>";
?>