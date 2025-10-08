<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input Aman (htmlspecialchars)</h2>

    <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" name="input" id="input">
        <br>
        <label for="email">Masukkan email:</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // mengambil data dari form
        $input = $_POST['input'];

        // mengamankan input agar tag HTML tidak dieksekusi
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "<h3>Email valid: </h3>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
        } else {
            // Tangani input yang tidak valid
            echo "<h3>Email tidak valid: </h3>" . $email . "<br>";
        }

        echo "<h3>Hasil Input yang aman:</h3>";
        echo "<p>$input</p>";
    }
    ?>
</body>
</html>
