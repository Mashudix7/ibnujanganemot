<?php
include 'function.php'; // Mengimpor fungsi dari function.php

// Menangani data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['update']) && !isset($_POST['delete'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];

    if (add_student($nis, $nama, $email, $jurusan, $kelas, $umur)) {
        header("Location: admin.php?message=Data berhasil ditambahkan.");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
           background:rgba(123, 166, 230, 0.6);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 350px;
          
           
        }
        .container h2 {
            margin-bottom: 20px;
            text-align: center;
            color:white;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color:white;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <form action="form.php" method="post">
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" id="nis" name="nis" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" id="umur" name="umur" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah Data">
            </div>
        </form>
    </div>
</body>
</html>
