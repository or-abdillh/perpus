<?php
//panggil koneksi
include "config/koneksi.php";

//deklarasi var
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori_buku = $_POST['kategori_buku'];
$keterangan = $_POST['keterangan'];
$jumlah_buku = $_POST['jumlah_buku'];

//query edit atau update ke database
$query = mysqli_query($koneksi, "UPDATE buku set 
                                judul_buku = '$judul_buku',
                                kategori_buku = '$kategori_buku',
                                keterangan = '$keterangan',
                                jumlah_buku = '$jumlah_buku' WHERE id_buku = '$id_buku'");

if($query == TRUE){
    echo "<script> alert('Proses Edit Berhasil!'); window.location='data-buku.php'; </script>";
} else {
    echo "<script> alert('Proses Edit Gagal!'); history.back(); </script>";
}

?>