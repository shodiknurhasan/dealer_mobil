<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Mobil Elegan</title>
    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        header {
            background: #111;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
        }

        header h1 {
            margin: 0;
            font-weight: 600;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 15px;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h2 {
            font-size: 48px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .btn {
            padding: 12px 28px;
            background: #e63946;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .section {
            padding: 60px 40px;
        }

        .cars {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .car {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .car:hover {
            transform: translateY(-5px);
        }

        .car img {
            width: 100%;
        }

        .car-info {
            padding: 20px;
        }

        footer {
            background: #111;
            color: #ccc;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
        .car-info button {
    background: #101010ff;
    border: none;
    padding: 10px 20px;
    color: white;
    font-size: 14px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
}

.car-info button:hover {
    background: #101010ff;
    transform: scale(1.05);
}

.car-info button:active {
    background: #101010ff;
    transform: scale(0.98);
}

    </style>
</head>
<body>

<header>
    <h1>Dealer Mobil Velocity</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#mobil">Daftar Mobil</a>
        <a href="pemesanan.php">pemesanan</a>
    </nav>
</header>

<section class="hero">
    <div>
        <h2>Temukan Mobil Impian Anda</h2>
        <a class="btn" href="#mobil">Lihat Koleksi</a>
    </div>
</section>

<section class="section" id="mobil">
    <h2>Daftar Mobil</h2>
    <div class="cars">
        <div class="car">
            <img src="car1.jpg" alt="Mobil 1">
            <div class="car-info">
                <h3>Toyota Avanza</h3>
                <p>Harga: Rp 850.000.000</p>
                <button onclick="alert('mobil ini telah dipilih!')">Pilih</button>
            </div>
        </div>

        <div class="car">
            <img src="car2.png" alt="mobil 3">
            <div class="car-info">
                <h3>Honda CRV</h3>
                <p>Harga: Rp 950.000.000</p>
                <button onclick="alert('mobil ini telah dipilih!')">Pilih</button>
            </div>
        </div>

        <div class="car">
            <img src="car3.webp" alt="mobil 3">
            <div class="car-info">
                <h3>Suzuki Ertiga</h3>
                <p>Harga: Rp 950.000.000</p>
                <button onclick="alert('mobil ini telah dipilih!')">Pilih</button>
            </div>
        </div>
    </div>
</section>

<section class="section" id="kontak">
    <h2>Kontak Kami</h2>
    <p>📍 Alamat: Jl. cipageran No. 12</p>
    <p>📞 Telepon: 0812-3456-7890</p>
    <p>📧 Email: suryagalih@gmail.com</p>
</section>

<footer>
    <p>dealer mobil velocity. All Rights Reserved.</p>
</footer>
<script>
function pesanMobil(namaMobil) {
    window.location.href = "pemesanan.php?mobil=" + encodeURIComponent(namaMobil);
}
</script>

</body>
</html>