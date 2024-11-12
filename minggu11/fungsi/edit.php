<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }elseif (!empty($_GET['anggota'])) {
        $user_id = antiInjection($koneksi, $_POST['id']);
        $nama = antiInjection($koneksi, $_POST['nama']);
        $jabatan = antiInjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiInjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiInjection($koneksi, $_POST['alamat']);
        $no_telp = antiInjection($koneksi, $_POST['no_telp']);
        $username = antiInjection($koneksi, $_POST['username']);
        $query_anggota = "UPDATE anggota SET nama = '$nama',
                          jenis_kelamin = '$jenis_kelamin',
                          alamat = '$alamat',
                          no_telp = '$no_telp',
                          jabatan_id = '$jabatan'
                          WHERE user_id = '$user_id'";
        if (mysqli_query($koneksi, $query_anggota)) {
            if (!empty($_POST['password'])) {
                // Generate random salt
                $password = $_POST['password'];
                $salt = bin2hex(random_bytes(16));
                // Gabungkan salt dengan password
                $combined_password = $salt . $password;
                // Hash password dengan salt
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
    
                $query_user = "UPDATE user SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>
