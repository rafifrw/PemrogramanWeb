<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            // collect value of input field
            $name = $_REQUEST['fname'];
            if(empty($name)){
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>

<!-- SOAL 25 -->
<!-- perbedaannya yaitu hanya pada penggunaan variabel, untuk case kali ini menggunakan variabel $_REQUEST
yang dapat gabungan nilai dari variabel $_GET, $_POST, dan $_COOKIE yang kesemuanya berhubungan dengan 
data yang dikirim bersamaan dengan request user. -->