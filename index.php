<?php
session_start();
include "config/koneksi.php";
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
  echo "<script> alert('Silahkan login terlebih dahulu!'); window.location='login.php'; </script>";
}
?>
<html>
<head>
<title>Perpustakaan Umum</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #5C3701;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #5C3701;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<?php
include "header.php";
?>
  
  <article>
  <h1>SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h1>
	</div>
	<div id="beranda-konten">
	<br>
	<br>
		<h2 style="color: red;">"MEMBACA ADALAH JENDELA DUNIA"</h2>
  </article>
</section>

<footer>
  <p>Developed By Nama Anda</p>
</footer>

</body>
</html>
