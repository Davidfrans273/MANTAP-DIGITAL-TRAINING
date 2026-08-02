<?php
require "koneksis.php";

$hasil = null;

if (isset($_POST["daftar"])) {
    $namapelatihan = trim($_POST["namapelatihan"]);
    $tanggalpelatihan = trim($_POST["tanggalpelatihan"]);
    $namalengkap = trim($_POST["namalengkap"]);
    $emaillengkap = trim($_POST["emaillengkap"]);
    $nomorhp = trim($_POST["nomorhp"]);
    $asal = trim($_POST["asal"]);
    if (empty($namapelatihan) || empty($tanggalpelatihan) || empty($namalengkap) || empty($emaillengkap) || empty($nomorhp) || empty($asal)) {
        echo "<script> alert ('Wajib Diisi Semua !'); </script>";
    } else {
        $sql = "insert into daftarpelatihan(namapelatihan, tanggalpelatihan, namalengkap, emaillengkap, nomorhp, asal) VALUES ('$namapelatihan', '$tanggalpelatihan', '$namalengkap', '$emaillengkap', '$nomorhp', '$asal')";
        $hasil = mysqli_query($conn, $sql);

        if ($hasil) {
            header("Location: pendaftaran.php?statuss=berhasils");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Formulir Pendaftaran Pelatihan</h2>
        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-4">
                    <label>Nama Pelatihan</label>
                </div>
                <div class="col-6">
                    <select name="namapelatihan" id="">
                        <option value="">--Pilih Pelatihan--</option>
                        <option value="Data Science Dasar">Data Science Dasar</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                        <option value="Dasar Pemrograman">Dasar Pemrograman</option>
                        <option value="Database">Database</option>
                        <option value="CyberSecurity">CyberSecurity</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label>Tanggal Pelatihan</label>
                </div>

                <div class="col-6">
                    <input type="date" class="form-control" name="tanggalpelatihan">
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col-4">
                    <label>Nama Lengkap</label>
                </div>

                <div class="col-6">
                    <input name="namalengkap" type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label>Email Lengkap</label>
                </div>

                <div class="col-6">
                    <input name="emaillengkap" type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label>Nomor HP</label>
                </div>

                <div class="col-6">
                    <input name="nomorhp" type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label>Instansi / Sekolah</label>
                </div>

                <div class="col-6">
                    <input name="asal" type="text" class="form-control">
                </div>
                <div class=" text-center my-3 ">
                    <button type="submit" name="daftar" class="btn btn-success px-5 text-light text-decoration-none" href="form.php">Daftar Sekarang</button>
                </div>
            </div>
        </form>
        <!-- lanjut field lainnya -->
    </div>
</body>

</html>