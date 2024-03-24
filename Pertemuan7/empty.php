<?php
$myArray = array();
    if(empty($myArray)){
        echo "Array tidak terdefnisi atau kosong<br>";
    
    }else {
        echo "Array tidak terdefnisi atau kosong<br>";
    }

// SOAL 2.1
// Di karenakan isi dari variabel myArray yang ada dikode program masih kosong jadi pada fungsi
// empty() ini menghasilkan nilai true karena kosong dan untuk outputnya seperti diatas.

    if(empty($nonExistentVar)){
        echo "<br>Array tidak terdefnisi atau kosong";
    
    }else {
        echo "<br>Array tidak terdefnisi atau kosong";
    }

// SOAL 2.2
// menambahkan variabel $nonExistentVar yang juga memberikan seperti
// diatas dan berniali true karena variabel tersebut belum diisi nlainya.
?>