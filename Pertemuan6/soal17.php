<!-- Cara 1 => PHP didalam HTML -->

<!-- <html>
    <head>
        <title>Cara 1</title>
    </head>
    <body>
        <p>Tanggal Hari Ini: <?php echo date("d M Y")?></p>
    </body>
</html> -->

<!-- Cara 2 => HTML didalam PHP -->
<?php
echo '<html>';
echo '<head><title>Cara 2</title></head>';
echo '<body>';
echo '<p>Tanggal Hari ini : '.date('d M Y'). '</p>';
echo '</body>';
echo '</html>';
?>

<!-- SOAL 17 -->
<!-- Dari dua cara tersebut mana yang lebih mudah menurut kalian, kemukakan jawaban disertai
dengan alasan -->
<!-- JAWABAN -->
<!-- Menurut saya lebih mudah menggunakan yang pertama karena
lebih simple dalam penulisannya. -->
