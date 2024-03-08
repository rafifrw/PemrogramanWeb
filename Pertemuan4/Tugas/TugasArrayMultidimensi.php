<?php
$photos = array(
    array(
        'image' => 'foto1.jpg',
        'nama' => 'Rafif Ramadhani W',
        'nim' => '224176001',
        'jurusan' => 'Teknologi Informasi',
        'email' => 'rafifrw@gmail.com'
    ),
    array(
        'image' => 'foto2.jpg',
        'nama' => 'Agung Permana',
        'nim' => '224676002',
        'jurusan' => 'Teknik Mesin',
        'email' => 'permanagung@gmail.com'
    ),
    array(
        'image' => 'foto3.jpg',
        'nama' => 'Khurul Ainul',
        'nim' => '224376003',
        'jurusan' => 'Akuntansi',
        'email' => 'khurul07@gmail.com'
    ),
    array(
        'image' => 'foto4.jpg',
        'nama' => 'Reza Fadhlurrohman',
        'nim' => '224876004',
        'jurusan' => 'Administrasi Niaga',
        'email' => 'rejaa089@gmail.com'
    ),
    array(
        'image' => 'foto5.jpg',
        'nama' => 'Lionel Messi',
        'nim' => '2248760111',
        'jurusan' => 'Teknik Sipil',
        'email' => 'pessi@gmail.com'
    ),
);

echo "<h2>Data Mahasiswa Array Multidimensi</h2>";

foreach ($photos as $photo) {
    echo "<img src='img/" . $photo['image'] . "' alt='Photo' width='150' height='180'>";
    echo "<li>Nama: " . $photo['nama'] . "</li>";
    echo "<li>NIM: " . $photo['nim'] . "</li>";
    echo "<li>Jurusan: " . $photo['jurusan'] . "</li>";
    echo "<li>Email: " . $photo['email']. "</li>";
    echo "<br>";
}
?>