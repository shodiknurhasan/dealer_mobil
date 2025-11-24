<?php
include_once "m_koneksi.php";

class m_user {


    //membuat fungsi untuk menampilkan data dari tabel customer
    function tampil_data() {

        //membuat objek dari kelas m_koneksi
        $koneksi = new m_koneksi();

        //querry untuk menampilkan semua data dari tabel user 
        $sql = "SELECT * FROM user";

        //perintah untuk menjalankan sql tampil data
        $query = mysqli_query($koneksi->koneksi, $sql);


        // mengecek apakah data yang ada ditabel user pada isinya atau tidak 

        if ($query->num_rows > 0 ){

            // merubah data menjadi berbentuk objek dan dimasukan kedalam variabel array
            while ($data = mysqli_fetch_object($query)) {
                
                // menyimpan data objek kedalam variabel array 
                $result[] = $data;
            }
        //kembalikan nilai array yang di dalamnya terdapat data objek
        return $result;
    } else {
        echo "tidak ada data";
    }
    }

    function tampil_data_by_id($id) {


        $koneksi = new koneksi();
        
        //nama tabel disesuaikan dengan studi kasus yang digunakan, dan field user_id juga disesuaikan dengan field yang ada pada tabel yang digunakan
        $sql = "SELECT * FROM user WHERE user_id = $id";


        //kembalikan hasil dari query di atas dan kita ubah datanya menjadi variabel object, dan berupa data single, artinya kita tidak perlu pengulangan
        return mysqli_fetch_object(mysqli_query($koneksi->koneksi, $sql));




    }

    function tambah_data($id_user,$username,$email,$password,$jenis_kelamin,$tempat,$no_tlp,$role) 
    {

        $koneksi =  new m_koneksi();

        $sql = "INSERT INTO user VALUES ('$id_user','$username','$email','$password','$jenis_kelamin','$tempat','$no_tlp','$role')";

        $query = mysqli_query($koneksi->koneksi, $sql);

        return $query;

    }

    function update_data($id, $nama, $email) {
     $koneksi = new koneksi();


     return mysqli_query($koneksi->koneksi, "UPDATE user SET nama = '$nama', email = '$email' WHERE user_id = '$id'");


    }

    function hapus_data($id) {


    }
}