<?php
//panggil koneksi
include "config/koneksi.php";

//deklarasi var
$id_buku = $_GET['id_buku'];

//query edit atau update ke database
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id_buku'");

if($query == TRUE){
    echo "<script> alert('Proses Hapus Berhasil!'); window.location='data-buku.php'; </script>";
} else {
    echo "<script> alert('Proses Hapus Gagal!'); history.back(); </script>";
}
?>