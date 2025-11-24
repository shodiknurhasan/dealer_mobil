<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .register-container {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.2);
            width: 350px;
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            background: #8E44AD;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #8E44AD;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #333;
        }
</style>
</head>

<body>
    <div class="card-body">
        <form action="../controller/c_user.php? -aksi-update" method-post>
            <input type hidden name="user_id" value="<?=$users->user_id?>">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
             <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" >
        
      </div>
               

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat" required>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" required>
            </div>
              <div class="form-group">
              <label>role</label>
              <input type="role" name="role" required>
            </div>

            <button type="submit" name="submit">Daftar</button>
        </form>
        <a href="daftar_user.php" class="back">← Kembali</a>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    include_once('../koneksi.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat = $_POST['tempat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "INSERT INTO user_name (username, email, jenis_kelamin, tempat, tanggal_lahir)
            VALUES ('$username', '$email', '$jenis_kelamin', '$tempat', '$tanggal_lahir')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}
?>