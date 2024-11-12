<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }elseif (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query2)) {
            $query = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Data Anggota Berhasil Dihapus');
            } else {
                pesan('danger', 'Data User Gagal Dihapus: ' . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', 'Data Anggota Gagal Dihapus: ' . mysqli_error($koneksi));
        }

        header('location:../index.php?page=anggota');
        exit();
    }
}
?>
