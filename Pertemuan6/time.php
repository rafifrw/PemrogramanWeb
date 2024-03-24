<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3> Time </h3>
        <?php
            date_default_timezone_set("asia/china");
            echo date("h:i:sa");
        ?>
    </body>
</html>

<!-- SOAL 20 -->
<!-- Penggunaan fungsi date_default_timezone_set("asia/jakarta") pada percobaan kali ini
memungkinkan kita untuk mengambil waktu kita pada saat menjalankan program sesuai dengan
waktu yang ada di Jakarta. -->