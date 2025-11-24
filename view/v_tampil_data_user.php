<?php
include_once '../controler/c_user.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD User</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      padding: 20px;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      padding: 10px 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    .navbar-left {
      font-weight: bold;
    }

    .navbar-left a {
      margin-right: 15px;
      text-decoration: none;
      color: #333;
    }

    .navbar-right input[type="text"] {
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .navbar-right button {
      padding: 6px 12px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      margin-left: 5px;
      cursor: pointer;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    thead {
      background: #4CAF50;
      color: white;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background: #f1f1f1;
    }

    th {
      text-transform: uppercase;
      font-size: 14px;
    }

    /* Tombol Update dan Hapus */
    .btn-update {
      background: #f0ad4e;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 5px;
    }

    .btn-hapus {
      background: #d9534f;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-update:hover {
      background: #ec971f;
    }

    .btn-hapus:hover {
      background: #c9302c;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="navbar-left">
      <a href="#">CRUD</a>
      <a href="../view/v_tambah_data_user.php">Tambah User</a>
      <a href="daftar_user.php">Cari User</a>
    </div>
    </div>
    <div class="navbar-right">
      <form method="get" style="display:inline-block;">
        <input type="text" name="cari" placeholder="Cari Siswa">
        <button type="submit">Cari</button>
      </form>
    </div>
  </div>

  <!-- Judul -->
  <h2>Cari User</h2>

  <!-- Tabel -->
  <table>
    <thead>
      <tr>
        <th>id_user</th>
        <th>username</th>
        <th>email</th>
        <th>jenis_kelamin</th>
        <th>tempat</th>
        <th>no_telepon</th>
      
      </tr>
    </thead>
    
    <tbody>
      <?php 
      $no = 1;
      foreach($user as $data): ?>
          <tr>
            <td><?= $data->id_user?></td>
            <td><?= $data->username?></td>
            <td><?= $data->email?></td>
            <td><?= $data->jenis_kelamin ?></td>
            <td><?= $data->tempat ?></td>
            <td><?= $data->no_tlp?></td>

              <a href="../controler/c_user.php?aksi=hapus&id_user=<?= $data->id_user?>" onclick="return confirm('Anda yakinn ingin mengubah ini?')" class="btn-update">UPDATE</a>
              
          
  
              <a href="../controler/c_user.php?aksi=hapus&id_user=<?= $data->id_user?>" onclick="return confirm('Anda yakinn ingin menghapus data ini?')" class="btn-hapus">HAPUS</a>

               
          
          </tr>
          <?php endforeach;
          ?>
</tbody>
