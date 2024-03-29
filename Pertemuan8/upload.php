<?php
if(isset($_POST["submit"])){
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory.basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize){
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
            // SOAL 1.3
            // echo'<br><img src="' . $targetFile . '"width="200" alt="Thumbnail">';
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

// SOAL 1.2
// Penambahan kode berfungsi untuk memastikan seselarasan file, ekstensi file yang diizinkan,
// membatasi ukuran file max 5mb, dan menambahkan pengecekan pada line ke 11.

// SOAL 1.3
// echo'<br><img src="' . $targetFile . '"width="200" alt="Thumbnail">';

// SOAL 1.4
// Pergantian kode tersebut merupakan penggantian format file yang dapat diupload, file yang
// bisa diupload hanya bertupe txt, pdf, doc, dan docx.