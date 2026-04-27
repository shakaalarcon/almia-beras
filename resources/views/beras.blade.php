<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Beras</a>
            <div>
                <a href="#" class="btn btn-outline-light">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mt-5 text-center">
        <h1>Selamat Datang di Toko Beras Tiga Saudara</h1>
        <p class="lead">Menjual beras berkualitas dengan harga terbaik</p>
        <a href="#" class="btn btn-primary">Lihat Produk</a>
    </div>

    <!-- Produk Section -->
    <div class="container mt-5">
        <div class="row">
            
            <!-- Card Produk -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="beras">
                    <div class="card-body">
                        <h5 class="card-title">Beras Premium</h5>
                        <p class="card-text">Harga: Rp 70.000 / 5kg</p>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="beras">
                    <div class="card-body">
                        <h5 class="card-title">Beras Medium</h5>
                        <p class="card-text">Harga: Rp 60.000 / 5kg</p>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="beras">
                    <div class="card-body">
                        <h5 class="card-title">Beras Ekonomis</h5>
                        <p class="card-text">Harga: Rp 50.000 / 5kg</p>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center mt-5 p-3">
        <p>&copy; 2026 Toko Beras Tiga Saudara</p>
    </footer>

</body>
</html>