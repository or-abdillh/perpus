<?php
//panggil koneksi
include "config/koneksi.php";

//deklarasi var
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori_buku = $_POST['kategori_buku'];
$keterangan = $_POST['keterangan'];
$jumlah_buku = $_POST['jumlah_buku'];

//query tambah atau insert ke database
$query = mysqli_query($koneksi, "INSERT INTO buku (id_buku, judul_buku, kategori_buku, keterangan, jumlah_buku) VALUES ('$id_buku', '$judul_buku', '$kategori_buku', '$keterangan', '$jumlah_buku')");

if($query == TRUE){
    echo "<script> alert('Proses Tambah Berhasil!'); window.location='data-buku.php'; </script>";
} else {
    echo "<script> alert('Proses Tambah Gagal!'); history.back(); </script>";
}

?>