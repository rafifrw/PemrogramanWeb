<?php
// Penambahan kode pada Praktikum 4 Langkah 2 (Penggunaan Struktur Kontrol pada PHP)
$nilaiNumerik =92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik > 70) {
    echo "Nilai huruf: D";
}
echo "<hr>";

/** SOAL 4.1
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 4.1)
 * JAWAB
 * Dari penambahan kode program tersebut menghasilkan nilai “A” karena nilai awal yang diinputkan yaitu 92,  jadi menghasilkan nilai “A”
 *  */ 


// Penambahan program untuk menampilkan penghitungan nilai hari menggunakan perulangan while 
 $jarakSaatIni = 0;
 $jarakTarget = 500;
 $peningkatanHarian = 30;
 $hari = 0;

 while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
 }
 echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
 echo "<hr>";

/**SOAL 4.2
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 4.2) 
 * JAWAB
 * Penambahan kode diatas akan menampilkan perhitungan hari menggunakan perulangan while.
 */

// Program Tambahan untuk menghitung jumlah buah yang akan dipanen(Menggunakan perulangan for).
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<hr>";

/** SOAL 4.3
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 4.3)
 * JAWAB
 * Program tersebut untuk menampilkan jumlah buah yang akan dipanen. Menggunakan perulangan for yang akan diulang sebanyak 10x 
 * sesuai dengan nilai variabel jumlahLahan, lalu perhitungan jumlah buah didapat dari tanamanPerLahan dikali dengan buahPerTanaman.
 */

 // Penambahan Program yang berfungsi untuk menjumlahkan total ujian(Menggunakan Array dan perulangan foreach)
 $skorUjian = [85, 92, 78, 96, 88];
 $totalSkor = 0;

 foreach ($skorUjian as $skor){
    $totalSkor += $skor;
 }

 echo "Total skor ujian adalah: $totalSkor";
 echo "<hr>";

 /**SOAL 4.4
  * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 4.4)
  * JAWAB
  * Program tersebut menggunakan array, dan menggunakan perulangan foreach yang dimana perulangan akan berhenti jika nilai array sudah dijalankan satu per satu.
  */

  // Program dibawah untuk menentukan siswa lulus atau tidak(Menggunakan perulangan foreach yang didalamnya ada percabangan if).
  $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

  foreach ($nilaiSiswa as $nilai) {
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
  }
  echo "<hr>";

/** SOAL 4.5
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 4.5)
 * JAWAB
 * Program tersebut menggunakan perulangan foreach dan percabangan if untuk menentukan nilai siswa dari array apakah lulus atau tidak.
 */

//  --------------------------------

/** SOAL 4.6
 * Ada soal cerita : Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah.
 * Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)
 */

$nialiMtk = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$jumlahSiswa = count($nialiMtk);

foreach($nialiMtk  as $nilai){
    if($nilai == 96 || $nilai == 92 || $nilai == 70 || $nilai == 64){
        continue;
    }
    $totalNilai += $nilai;
}
$rerata = $totalNilai/($jumlahSiswa-4);
echo "Total Nilai: $totalNilai";
echo "<br> Nilai rata-rata: $rerata";
echo "<hr>";
/** SOAL 4.7
 * Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000.
 * Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.
 */

 $hargaProduk = 120000;
 $diskon = 0.2;
 $hargaDiskon = 0;

 if($hargaProduk > 100000){
    $hargaDiskon = ($hargaProduk - ($hargaProduk * $diskon));
    echo "Anda mendapatkan diskon! Harga setelah diskon: $hargaDiskon";
 } else {
    $hargaDiskon = $hargaProduk;
    echo "Anda tidak mendapatkan diskon, Anda harus membayar sebesar $hargaProduk";
 }
 echo "<hr>";

 /** SOAL 4.8
  * Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
  * Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
  */

$skor = 550;
$totalSkor = "Total skor pemain adalah: $skor";

$hadiah = ($skor >500) ? "YA" : "TIDAK";

echo $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>