<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Mobil</title>

    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #0f0f0f;
            color: white;
        }

        header {
            background: #111;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-weight: 600;
            color: white;
        }

        nav a {
            color: #ddd;
            text-decoration: none;
            margin-left: 20px;
            font-size: 15px;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #1a1a1a;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(255,255,255,0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
        }

        label {
            font-size: 14px;
            color: #ccc;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: none;
            border-radius: 8px;
            background: #2a2a2a;
            color: white;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            outline: 2px solid #e63946;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #e63946;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #c72f3b;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            padding: 20px;
            background: #111;
            color: #aaa;
        }
    </style>
</head>
<body>

<header>
    <h1>Pemesanan Mobil</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="tampilan_dealer.php">Daftar Mobil</a>
    </nav>
</header>

<div class="container">
    <h2>Form Pemesanan</h2>

    <form action="proses_pemesanan.php" method="POST">

        <!-- Ambil nama mobil dari URL -->
        <?php
        $mobilDipilih = isset($_GET['mobil']) ? $_GET['mobil'] : "Belum dipilih";
        ?>

        <label>Mobil yang Dipilih</label>
        <input type="text" name="mobil" value="<?php echo $mobilDipilih; ?>" readonly>

        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

        <label>Nomor Telepon</label>
        <input type="text" name="telepon" placeholder="Masukkan nomor telepon" required>

        <label>Alamat Lengkap</label>
        <textarea name="alamat" rows="4" placeholder="Masukkan alamat lengkap" required></textarea>

        <label>Metode Pembayaran</label>
        <select name="pembayaran">
            <option>Transfer Bank</option>
            <option>COD (Cash On Delivery)</option>
            <option>Kredit</option>
        </select>

        <button type="submit">Kirim Pemesanan</button>
    </form>
</div>

<footer>
    <p>Dealer Mobil Kece. All Rights Reserved.</p>
</footer>

</body>
</html>
