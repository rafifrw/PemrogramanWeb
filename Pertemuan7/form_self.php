<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    //inisialisai variabel

    $namaErr = "";
    $nama = "";

    //Cek apalah form sudah disubmit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Validasi nama (contoh : pastikan nama tidak kosong)
        if(empty($_POST["nama"])){
            $namaErr = "Nama harus diisi!!";
        }else{
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama :</label>
        <input type="text" name = "nama" id = "nama" value= " <?php echo $nama;?>">
        <span class = "error" ><?php echo $namaErr;?></span><br><br>

        <input type="submit" name = "submit" value = "submit">
    </form>
</body>
</html>

<!-- SOAL 3.2 -->
<!-- Ketika nama berhasil dimasukkan (variabel nama berhasil diisi) maka menghasilkan
output “Data berhasil disimpan”, hal ini berasal dari pengecekan menggunakan fungsi empty(). -->