<?php
$targetDirectory = "documents/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

// SOAL 2.1
// Praktikum ini bertujuan untuk mengecek apakah bisa mengupload file lebih dari satu dan
// ketika dijalankan bisa, dengan catatan file yang akan diunggah sesuai dengan file yang
// diizinkan pada kode program.

// SOAL 2.2
// Pada line 9 file form_multiupload.php format file diganti menjadi khusus gambar.