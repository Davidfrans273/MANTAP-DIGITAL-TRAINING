<?php  
    require "koneksis.php";

    $hasil = null;

    if(isset($_POST["buatakun"])){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
            if(empty($username) || empty($password)){
                echo " <script> alert ('Wajib Diisi !'); </script> ";
            }else{
                $sql = "insert into pengguna(nama, passwords) VALUES('$username', '$password')";
                $hasil = mysqli_query($conn, $sql);
                if($hasil){
                    header("Location: index.php? status=berhasil");
                }
            }
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>signup - Mantap Digital Training</title>
<style>
    :root {
        --hijau-tua: #14532d;
        --hijau: #1a6b45;
        --hijau-terang: #e8f3ec;
        --pink-aksen: #d6336c;
        --abu-bg: #f5f5f5;
        --teks-gelap: #1f2937;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: var(--abu-bg);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    header {
        background: var(--hijau-tua);
        color: #fff;
        padding: 18px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    header .brand {
        font-size: 1.3rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .login-wrapper {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .login-card {
        background: #fff;
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(20, 83, 45, 0.12);
        overflow: hidden;
    }

    .login-card .card-header {
        background: var(--hijau-terang);
        padding: 28px 32px 20px;
        text-align: center;
        border-bottom: 3px solid var(--hijau);
    }

    .login-card .card-header h1 {
        color: var(--hijau-tua);
        font-size: 1.5rem;
        margin-bottom: 6px;
    }

    .login-card .card-header p {
        color: #4b5563;
        font-size: 0.9rem;
    }

    .login-card form {
        padding: 28px 32px 32px;
    }

    .field {
        margin-bottom: 18px;
    }

    .field label {
        display: block;
        font-size: 0.88rem;
        font-weight: 600;
        color: var(--teks-gelap);
        margin-bottom: 6px;
    }

    .field input {
        width: 100%;
        padding: 11px 14px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 0.95rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .field input:focus {
        outline: none;
        border-color: var(--hijau);
        box-shadow: 0 0 0 3px rgba(26, 107, 69, 0.15);
    }

    .btn-login {
        width: 100%;
        background: var(--hijau);
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 6px;
    }

    .btn-login:hover {
        background: var(--hijau-tua);
    }

    .card-footer {
        text-align: center;
        padding: 0 32px 28px;
        font-size: 0.85rem;
        color: #6b7280;
    }

    .card-footer a {
        color: var(--pink-aksen);
        text-decoration: none;
        font-weight: 600;
    }

    .card-footer a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<header>
    <div class="brand">MANTAP DIGITAL TRAINING</div>
</header>

<div class="login-wrapper">
    <div class="login-card">
        <div class="card-header">
            <h1>Buat Akun Anda</h1>
            <p>Portal Peserta Mantap Digital Training</p>
        </div>
        <form method="POST" action="">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username">
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn-login" name="buatakun">Buat Akun</button>
            <a href="login.php"  style="margin-top: 5px; display: inline-block;">Sudah punya akun?</a>
        </form>
    </div>
</div>

</body>
</html>
