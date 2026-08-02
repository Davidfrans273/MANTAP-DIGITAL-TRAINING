<?php

require "koneksis.php";

if (isset($_GET["statuss"]) && $_GET["statuss"] === "berhasils") {
    echo "<script> alert ('Daftar Berhasil !'); </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <?php
    $sql = mysqli_query($conn, "select * from daftarpelatihan order by id desc limit 1");

    while ($data = mysqli_fetch_assoc($sql)) { ?>
        <div class="container mt-5">

            <h2 class="text-center mb-5">Formulir Pendaftaran Pelatihan</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card shadow">
                        <div class="card-body p-4">

                            <h3 class="text-success text-center mb-4">
                                PENDAFTARAN BERHASIL ✅
                            </h3>

                            <p><strong>Nama Pelatihan :</strong> <?= $data["namapelatihan"]; ?></p>
                            <p><strong>Tanggal Pelatihan :</strong> <?= $data["tanggalpelatihan"]; ?></p>

                            <hr>

                            <p><strong>Nama Lengkap :</strong> <?= $data["namalengkap"]; ?></p>
                            <p><strong>Email :</strong> <?= $data["emaillengkap"]; ?></p>
                            <p><strong>Nomor HP :</strong> <?= $data["nomorhp"]; ?></p>
                            <p><strong>Instansi / Sekolah :</strong> <?= $data["asal"]; ?></p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- lanjut field lainnya -->
        </div>
    <?php } ?>
</body>

</html>