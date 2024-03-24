<?php
$umur;
if(isset($umur)&&$umur >= 18){
    echo "Anda Sudah Dewasa";

}else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}

// SOAL 1.1
// Pada percobaan kali ini menghasilkan print pada else, hal ini dikarenakan pada kode
// program yang ditulis variabel umur belum ada nilainya.

$data = array("nama"=>"Jane", "usia"=> 25);
    if(isset($data["nama"])){
        echo "Nama :".$data["nama"];
    
    }else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }

// SOAL 1.2 
// Kode tambahan berhasil menampilkan nama karena dalam variabel data (variabel untuk nama) telah diberi nilai.
?>