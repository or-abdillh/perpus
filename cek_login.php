<?php
session_start();
include "config/koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['password'];

if ($username == 'admin' AND $pass == 'admin') {
            // apabila berhasil
            session_start();
            $_SESSION['username']     = 'admin';
            $_SESSION['password']     = 'admin';

            header('location:index.php');
} else {
      echo "<script> alert('Username dan Pass yang dimasukkan salah!'); window.location='login.php'; </script>";
}
?>