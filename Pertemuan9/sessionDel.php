<?php
    session_start();
?>

<html>
    <body>
        <?php
            session_unset();
            session_destroy();

            echo"All session variable are now removed, and the session is destroyed.";
        ?>
    </body>
</html>

<!-- SOAL 19 -->
<!-- Akan terjadi error karena data terlah terhapus -->