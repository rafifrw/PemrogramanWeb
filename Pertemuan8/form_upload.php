<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name = "documentToUpload" id="documentToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>

<!-- SOAL 1.1 -->
<!-- kode tersebut menghasilkan halaman web dengan formulir unggah file. 
Saat pengguna mengunggah file melalui formulir dan menekan tombol "Upload File",
file tersebut akan diproses oleh skrip PHP yang terletak di file "upload.php" dan disimpan dalam direktori "uploads/". -->