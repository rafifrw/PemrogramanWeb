<?php
// Perubahan kode untuk soal 3.2
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'][0];
    $file_size = $_FILES['file']['size'][0];
    $file_tmp = $_FILES['file']['tmp_name'][0];
    $file_type = $_FILES['file']['type'][0];
    
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); 

    $extensions = array("jpg", "jpeg", "png");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2MB';
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?>
