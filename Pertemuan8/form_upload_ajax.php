<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple="multiple" accept=".jpg, .jpeg, .png"/>
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <!-- SOAL 3.2 -->
        <!-- Penambahan kode berikut -->
        <!-- <script>
            $(document).ready(function() {
                $('#upload-form').submit(function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: 'upload_ajax.php',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('#status').html(response);
                        },
                        error: function() {
                            $('#status').html('Terjadi kesalahan saat mengunggah file.');
                        }
                    });
                });
            });
        </script>
    </body>
</html> -->

<!-- SOAL 3.1 -->
<!-- Pada percobaan kali ini hampir sama dengan percobaan sebelumnya, hanya saja kali ini
menggunakan ajax -->


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload.css" >
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Upload</button>
            </form>
            <div id="status" class="upload-status"></div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>

<!-- SOAL 4.1 -->
<!-- Penambahan file css menghasilkan tampilan yang lebih menarik dikarenakan adanya penggunaan
jquery dan css untuk tampilannya. -->