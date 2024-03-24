<!DOCTYPE html>
<html>
<head>
    <title>Fungi REGEX</title>
</head>
<body>
    <?php
    // Langkah 2
    // $pattern = '/[a-z]+/';
    // $text = 'This is a Sample Text';
    // if(preg_match($pattern, $text, $MATCHES)){
    //     echo "Huruf kecil ditemukan".$MATCHES[0];
    // }else{
    //     echo "Tidak ada huruf kecil!";
    // }

    // Langkah 6
    // $pattern = '/[0-9]+/';
    // $text = 'There are 123 apples';
    // if(preg_match($pattern, $text, $MATCHES)){
    //     echo "Cocokan : ".$MATCHES[0];
    // }else{
    //     echo "Tidak ada yang cocok!";
    // }

    // Langkah 10
    // $pattern = '/apple/';  
    // $replacement = 'banana';
    // $text = 'i like apple pie';
    // $new_text = preg_replace($pattern, $replacement, $text);
    // echo $new_text; //Output : "I like banana pie."

    $pattern = '/go{2,2}d/';
    $text = 'god id good';
    if(preg_match($pattern, $text, $MATCHES)){
        echo "Cocokan : ".$MATCHES[0];
    }else{
        echo "Tidak ada yang cocok!";
    }
    ?>
</body>
</html>

<!-- SOAL 5.1 -->
<!-- Kode tersebut mencocokkan huruf kecil dari sebuah kalimat dengan
yang dicocokkan huruf kecil a sampai z, dan hasilnya ditemukan. -->

<!-- SOAL 5.2 -->
<!-- Untuk mencocokkan angka yang muncul dari 0 sampai 9, lalu dengan adanya
penambahan kuantifier(+) untuk menampilkan lebih dari satu karakter -->

<!-- SOAL 5.3 -->
<!-- Pada percobaan kali ini menggunakan fungsi preg_replace seperti kode program tersebut, jadi
terdapat variabel baru bernama $new_text = preg_replace($pattern, $replacement, $text). -->

<!-- SOAL 5.4 -->
<!-- Penggunaan kuantifier(*) pada percobaan kali ini menghasilkan sebuah output god, yaitu sesuai
dengan kata pertama yang cocok pada kalimat yang sesuai. -->

<!-- SOAL 5.5 -->
<!-- Outputnya karakter "o" muncul no atau satu kali. -->

<!-- SOAL 5.6 -->
<!-- Penggunaan {n,m} artinya yaitu akan menampilkan sebuah huruf sebanyak minimal n kali dan
maksimal m kali. -->