<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">product baju</h1>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <?php
        // Data produk
        $products = array(
            array(
                "nama" => "baju kemeja",
                "gambar" => "img/foto1.jpg.jpg",
                "harga" => "125.000"
            ),
            array(
                "nama" => "baju rajut korean style",
                "gambar" => "img/foto2.jpg.jpg",
                "harga" => "200.000"
            ),
            array(
                "nama" => "kaos oblong",
                "gambar" => "img/foto3.jpg.jpg",
                "harga" => "80.000"
            ),
            array(
                "nama" => "kaos oblong",
                "gambar" => "img/foto4.jpg.jpg",
                "harga" => "50.000"
            ),
        );

        // Menampilkan produk
        foreach ($products as $product) {
            echo '<div class="card">';
            echo '<img src="' . $product['gambar'] . '" alt="' . $product['nama'] . '">';
            echo '<h3>' . $product['nama'] . '</h3>';
            echo '<p>' . $product['harga'] . '</p>';
            
            // Tambahkan tombol pesan dengan JavaScript
            echo '<button class="btn btn-primary pesan-btn" data-nama="' . $product['nama'] . '">Pesan</button>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="product.js"></script>
</body>
</html>
