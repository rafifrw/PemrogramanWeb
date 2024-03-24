<!-- Praktikum Bagian 1 Langkah 1 Pembuatan Array untuk menampilkan nama dosen-->
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraga"];

            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";

// Soal 1.
// Tampilkan array menggunakan perulangan

            for ($i = 0; $i < count($Listdosen); $i++) {
                echo $Listdosen[$i] . "<br>";
            }
            
// Output yang dihasilkan berurut dari indeks ke 0.
        ?>
    </body>
</html>