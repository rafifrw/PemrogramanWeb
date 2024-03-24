<!-- Praktikum 2 Langkah 1 penggunaan Array Asosiatif untuk menampilkan informasi dosen -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sclae=1">
        <title></title> 
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elon Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        
        // echo "Nama: {$Dosen ['nama']} <br>";
        // echo "Domisili: {$Dosen ['domisili']} <br>";
        // echo "Jenis Kelamin: {$Dosen ['jenis_kelamin']} <br>";
        ?>

        <!-- Setelah menggunakan style tabel -->
        <table border="1" cellpadding="6">
        <tr>
            <td><strong>Informasi Dosen</strong></td>
            <td></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
    </body>
</html>


<!-- SOAL 2  -->
<!-- Amati hasil yang ditampilkan. Kemudian tambahkan style tabel pada output tampilan
tersebut supaya lebih menarik -->
<!-- JAWAB -->
<!-- Terdapat hasil nama dosen, domisili, dan jenis kelamin sesuai pada array -->