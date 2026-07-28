<?php
    if(isset($_GET["statusz"])&& $_GET["statusz"]==="loginberhasil"){
        echo "<script> alert ('Login Berhasil !'); </script>";
    }
    if(isset($_GET["status"])&& $_GET["status"]==="berhasil"){
        echo "<script> alert ('Akun berhasil dibuat'); </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGITALENT</title>
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
            <a class="navbar-brand" href="#">
                MANTAP DIGITAL TRAINING
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">BERANDA</a>
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
    <main>
        <div class="konten">
            <img src="BUAT FIGMA DIGITALENT.jpg" alt="">
            <div class="paragraf">
                <h2>MANTAP DIGITAL TRAINING</h2>
                <p>Inisiatif Pemerintah & Industri untuk Meningkatkan Kompetensi Digital Tenaga Kerja Indonesia <br>
                    📌 Fasilitator berpengalaman dan tersertifikasi <br>
                    📌 Materi berbasis kebutuhan industri <br>
                    📌 Sertifikat pelatihan diakui nasional <br>
                    📌 Program lanjutan & pembinaan <br>
                    Bergabunglah sekarang dan raih peluang karier digital yang lebih baik! Dapatkan kesempatan untuk
                    program lanjutan seperti inkubasi startup, magang industri, dan rekrutmen terbuka.</p>
            </div>
        </div>
    </main>
    <section class="section">
        <h2>Daftar Pelatihan Tersedia</h2>
        <div class="isi-section">
            <div class="isi1">
                <h4>Data Sience Dasar</h4>
                <p>Pengenalan data science untuk pemula. <br>
                    Topik: Python, Statistik <br>
                    Tanggal: 5 - 10 Agustus 2025</p>
                <div class="button">
                    <a href="form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
            <div class="isi2">
                <h4>Data Science Dasar</h4>
                <p>Strategi pemasaran digital untuk UMKM. <br>
                    Topik: SEO, Ads, Media Sosial <br>
                    Tanggal: 12 - 17 Agustus 2025</p>
                <div class="button">
                    <a href = "form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
            <div class="isi3">
                <h4>Data Science Dasar</h4>
                <p>Belajar desain antarmuka menarik dan intuitif. <br>
                    Topik: Figma, Prototype <br>
                    Tanggal: 20 - 25 Agustus 2025</p>
                <div class="button">
                    <a href = "form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
            <div class="isi4">
                <h4>Data Science Dasar</h4>
                <p>Membuat website responsif dengan HTML, CSS, dan JS. <br>
                    Topik: Frontend, Responsive <br>
                    Tanggal: 1 - 7 September 2025</p>
                <div class="button">
                    <a href = "form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
            <div class="isi5">
                <h4>Data Science Dasar</h4>
                <p>Belajar pengelolaan database relasional. <br>
                    Topik: SQL, PostgreSQL <br>
                    Tanggal: 10 - 15 September 2025</p>
                <div class="button">
                    <a href = "form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
            <div class="isi6">
                <h4>Data Science Dasar</h4>
                <p>Perlindungan sistem dan data digital. <br>
                    Topik: Cybersecurity, Enkripsi <br>
                    Tanggal: 18 - 23 September 2025</p>
                <div class="button">
                    <a href = "form.php"><h7>Daftar Sekarang</h7></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>