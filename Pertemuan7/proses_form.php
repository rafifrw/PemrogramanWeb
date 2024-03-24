<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama : ".$nama."<br>";
    echo "Email : ".$email."<br>";
}
// SOAL 3.1
/**Penggunaan form pada percobaan kali ini yaitu ketika kita sudah memasukkan nilai nama, dan
email lalu disubmit maka akan menghasilkan output seperti gambar disebelah kanan, hal ini
dikarenakan adanya action yang merujuk pada proses_form yang telah dibuat. */
?>