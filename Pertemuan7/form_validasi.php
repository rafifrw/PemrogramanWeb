<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Dengan Validasi </title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input Dengan Validasi </h1>
        <form id="myForm">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" >
            <span id="nama-error" style="color: red;" ></span>
            <br>

            <label for="email">Email : </label>
            <input type="text"  id="email" name="email">
            <span id="email-error" style="color: red;" ></span>
            <br>

            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span>
            <br>


            <input type="submit" value="Submit">
        </form>
        <div id="hasil"></div>
        <script>
            $(document).ready(function (){
                $("#myForm").submit(function(event) {
                    event.preventDefault();
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid =true;

                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email == "") {
                        $("#email-error").text("Email harus diisi");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }
                    // Password
                    if (password === "") {
                        $("#password-error").text("Password harus diisi.");
                        valid = false;
                    } else if (password.length < 8) {
                        $("#password-error").text("Password minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    if (valid) {
                        !event.preventDefault();
                        // AJAX
                        $.ajax({
                            url: "proses_validasi.php",
                            type: "POST",
                            data: $("#myForm").serialize(),
                            success: function(response) {
                                console.log(response);
                                $("#hasil").html(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>

<!-- SOAL 7.1 -->
<!-- Pada percobaan kali ini yaitu validasi email dan nama, untuk validasi email sendiri harus
menggunakan @gmail.com untuk validasi. -->

<!-- SOAL 7.2 -->
<!-- Penambahan kode tersebut memberikan peringatan jika nama dan email belum diisi. Dan akan
memberikan output seperti diatas. -->

<!-- SOAL 7.3 -->
<!-- Penambahan kode ada di line 62-74 yang berguna untuk menampilkan hasil di halaman yang sama.-->

<!-- SOAL 7.4 -->
<!-- Penambahan validasi password sama seperti sebelumnya untuk validasi email, dan nama. -->