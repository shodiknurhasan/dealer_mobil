<?php

class m_koneksi{


    // value dari properti dibawah di sesuaikan dengan studi kasus kalian 
   private $host = "localhost",
      $username = "root",
      $pass = "",
      $db = "dealer";
   public $koneksi;

//    membuat konstrak yang dimana fungsi ini akan dijalankan otomatis ketika kita membuat objek kelas koneksi
   function __construct()
   {
       $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db);

       if ($this->koneksi) {
        

        // mengembalikkan nilai true jika koneksi kedatabasenya berhasil
        return $this->koneksi;
       }else {
        echo "koneksi ke database gagal";
       }
   }
}