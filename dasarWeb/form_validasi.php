<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="proses_ajax.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini. -->
        </div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (password.length < 8) {
                        $("#password-error").text("Password minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    //  mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    if (valid) {
                        $.ajax({
                        url: 'proses_ajax.php', 
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $('#hasil').html(response);
                        }
                    });
                    }
                });
            });
        </script>
    </body>
</html>


<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="form_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
                    }
                });
            });
        </script>
    </body>
</html> -->
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $errors = array();

//     // Validasi nama
//     if (empty($nama)) {
//         $errors[] = "Nama harus diisi.";
//     } 

//     // Validasi email
//     if (empty($email)) {
//         $errors[] = "Email harus diisi.";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = "Format email tidak valid.";
//     }

//     // Jika ada kesalahan validasi
//     if (!empty($errors)) {
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }   
//     } else {
//         // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
//         // Misalnya, menyimpan data ke database atau mengirim email
//         echo "Data berhasil dikirim: Nama = $nama, Email = $email";
//     }
// }
?>


<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form method="post" action="form_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $errors = array();

//     // Validasi nama
//     if (empty($nama)) {
//         $errors[] = "Nama harus diisi.";
//     } 

//     // Validasi email
//     if (empty($email)) {
//         $errors[] = "Email harus diisi.";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = "Format email tidak valid.";
//     }

//     // Jika ada kesalahan validasi
//     if (!empty($errors)) {
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }   
//     } else {
//         // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
//         // Misalnya, menyimpan data ke database atau mengirim email
//         echo "Data berhasil dikirim: Nama = $nama, Email = $email";
//     }
// }
?>