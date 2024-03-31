<?php
// Proses login jika tombol login ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses autentikasi atau validasi login
    // Contoh penggunaan header untuk redirect ke halaman lain
    header("Location: productbaju.php");
    exit(); // Pastikan untuk keluar dari skrip PHP setelah melakukan redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="navbar">
        <a href="#" onclick="toggleMenu()">Menu</a>
        <div id="navbar-links">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>

    <div class="container">
        <div class="header">
            <h1>Login</h1>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <script>
        function toggleMenu() {
            var x = document.getElementById("navbar-links");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

</body>
</html>
