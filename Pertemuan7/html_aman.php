<!DOCTYPE html>
<html>
<head>
    <title>Form Input Keamanan</title>
</head>
<body>
    <h2>Form Input Keamanan</h2>
    <?php

    $namaErr = "";
    $nama = "";
    $email = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST['nama'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "nama yang valid".$input."<br>";


        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email anda valid";
        }else{
            echo "Email anda tidak valid";
        }
    }
    ?>
    <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama :</label>
        <input type="text" name = "nama" id = "nama" value= " <?php echo $nama;?>"><br>
        <label for="email">Email :</label>
        <input type="text" name = "email" id = "email" value = "<?php echo $email;?>">
        <span class = "error" ><?php echo $namaErr;?></span><br><br>

        <input type="submit" name = "submit" value = "submit">
        
    </form>
</body>
</html>

<!-- SOAL 4.1 -->
<!-- Kode tersebut berfungsi untuk menghindari risiko serangan XSS karena karakter-karakter khusus HTML 
akan dikonversi menjadi entitas HTML sehingga tidak akan dieksekusi sebagai kode HTML oleh browser -->

<!-- SOAL 4.2 -->
<!-- Kode tersebut berfungsi untuk memastikan bahwa nilai yang dimasukkan adalah alamat email yang valid, 
sehingga membantu memastikan bahwa input yang diterima dari formulir web sesuai dengan format yang diharapkan. -->