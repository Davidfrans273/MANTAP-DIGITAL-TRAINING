<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                MANTAP DIGITAL TRAINING
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PELATIHAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
    <h2 class="text-center mb-5">Formulir Pendaftaran Pelatihan</h2>

    <div class="row mb-3">
        <div class="col-4">
            <label>Nama Pelatihan</label>
        </div>

        <div class="col-6">
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-4">
            <label>Tanggal Pelatihan</label>
        </div>

        <div class="col-6">
            <input type="date" class="form-control">
        </div>
    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-4">
            <label>Nama Lengkap</label>
        </div>

        <div class="col-6">
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-4">
            <label>Email Lengkap</label>
        </div>

        <div class="col-6">
            <input type="text" class="form-control">
        </div>
    </div>

        <div class="row mb-3">
        <div class="col-4">
            <label>Nomor HP</label>
        </div>

        <div class="col-6">
            <input type="text" class="form-control">
        </div>
    </div>

        <div class="row mb-3">
        <div class="col-4">
            <label>Instansi / Sekolah</label>
        </div>

        <div class="col-6">
            <input type="text" class="form-control">
        </div>
    </div>

    <!-- lanjut field lainnya -->
</div>
</body>
</html>