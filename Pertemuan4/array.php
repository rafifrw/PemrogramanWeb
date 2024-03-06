<?php
// Program pengecekan nilai siswa(menggunakan array dan perulangan foreach)
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<hr>";

/** SOAL 5.1
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.1)
 * JAWAB
 * Program diatas menggunakan array untuk menyimpan nilai siswa. Menggunakan perulangan foreach yang didalamnya ada 
 * percabangan if untuk pengecekan satu per satu nilai array dengan nilai yang lulus dengan syarat lebih dari sama dengan 70.
 */

// Program tambahan untuk pengecekan pengalaman kerja karyawan(Menggunakan array dan perulangan foreach)
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<hr>";

/** SOAL 5.2
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.2)
 * JAWAB
 * Pada percobaan kali ini menampilkan data karyawan yang memiliki pengalaman kerja lebih dari 5 tahun, yaitu dengan dibandingkan terlebih dahulu.
 */


 // Program dibawah menggunakan array untuk menyimpan daftar nilai
 $daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<hr>";

/** SOAL 5.3
 * Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 5.3)
 * JAWAB
 * Pada percobaan kali ini mencoba untuk menampilkan nilai dari sebuah array dengan mata kuliah “Fisika” dan menampilkan nilai dari matkul tersebut.
 */

 //----------------------------------------------------
 /** SOAL 5.4
  * Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
  * Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90
  */

$daftarNilaiMtk = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$jumlahNilai = 0;
foreach($daftarNilaiMtk as $nilai){
    $jumlahNilai += $nilai[1];
}

$rerata = $jumlahNilai/count($daftarNilaiMtk);
echo "Nilai rata-rata $rerata <br>";
foreach($daftarNilaiMtk as $nilai){
    if ($nilai[1] >= $rerata){
        echo $nilai[0]. " Dengan Nilai " .$nilai[1]. "<br>";
        echo "Nilai Anda diatas rata-rata<br><br>";
    }
}
?>