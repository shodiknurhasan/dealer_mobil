<?php
include_once '../model/m_koneksi.php';

class m_user {

    // === Menampilkan semua data user ===
    function tampil_data() {
        $koneksi = new koneksi();
        $sql = "SELECT * FROM user";
        $query = mysqli_query($koneksi->koneksi, $sql);
        
        if ($query && mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_object($query)) {
                $result[] = $data;
            }
            return $result;
        } else {
            return [];
        }
    }

    // === Menampilkan data user berdasarkan ID ===
    function tampil_data_by_id($id) {
        $koneksi = new koneksi();
        $sql = "SELECT * FROM user WHERE id_user = '$id'";
        $query = mysqli_query($koneksi->koneksi, $sql);
        return mysqli_fetch_object($query);
    }

    // === Tambah Data ===
    function tambah_data($id_user, $username, $email, $password, $jenis_kelamin, $tempat, $no_tlp, $role) {
        $koneksi = new koneksi();
        $sql = "INSERT INTO user (id_user, username, email, password, jenis_kelamin, tempat, no_tlp, role)
                VALUES ('$id_user', '$username', '$email', '$password', '$jenis_kelamin', '$tempat', '$no_tlp', '$role')";
        return mysqli_query($koneksi->koneksi, $sql);
    }

    // === Update Data ===
    function update_data($id, $nama, $email, $password, $alamat, $jk, $role) {
        $koneksi = new koneksi();
        $sql = "UPDATE user SET 
                    nama = '$nama',
                    email = '$email',
                    password = '$password',
                    alamat = '$alamat',
                    jk = '$jk',
                    role = '$role'
                WHERE id_user = '$id'";
        return mysqli_query($koneksi->koneksi, $sql);
    }

    // === Hapus Data ===
    function hapus_data($id) {
        $koneksi = new koneksi();
        $sql = "DELETE FROM user WHERE id_user = '$id'";
        return mysqli_query($koneksi->koneksi, $sql);
    }
}
?>
    