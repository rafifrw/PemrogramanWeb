<!-- Praktikum 3 Langkah 2 membuat file php Array3 -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type ="text/css" href="style.css"/>
    </head>
    <body>
        <h2>Multidimensional array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("Avengers: Invity War",2018,8.7),
                    array("The Avengers",2012,8.1),
                    array("Guardian of the Galaxy",2014,8.1),
                    array("Iron Man",2008,7.9)
                );
                echo "<tr>";
                    echo "<td>". $movie[0][0] ."</td>";
                    echo "<td>". $movie[0][1] ."</td>";
                    echo "<td>". $movie[0][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[1][0] ."</td>";
                    echo "<td>". $movie[1][1] ."</td>";
                    echo "<td>". $movie[1][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[2][0] ."</td>";
                    echo "<td>". $movie[2][1] ."</td>";
                    echo "<td>". $movie[2][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[3][0] ."</td>";
                    echo "<td>". $movie[3][1] ."</td>";
                    echo "<td>". $movie[3][2] ."</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>

<!-- SOAL 3
Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu! -->
<!-- JAWAB -->
<!-- Kode tersebut menggunakan multidimensional array yang ditampilkan menggunakan tabel dan menggunakan style css-->