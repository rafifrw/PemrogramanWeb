<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            echo "Favorite color is ". $_SESSION["favcolor"]. ".<br>";
            echo "Favorite animal is ".$_SESSION["favanimal"]. ".";
        ?>
    </body>
</html>

<!-- SOAL 18 -->
<!-- Ketika melakukan perintah call terlebih dahulu akan terjadi error karena data belum didefinisikan -->