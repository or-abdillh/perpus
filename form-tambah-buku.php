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
    <form action="aksi-tambah-buku.php" method="POST">
  <h1>INPUT DATA BUKU</h1>
    ID Buku : <input type="text" name="id_buku"
    placeholder="Masukkan ID Buku"><p>
    Judul Buku : <input type="text" name="judul_buku"
    placeholder="Masukkan Judul Buku"><p>
    Kategori Buku :
     <select name="kategori_buku">
    <option value="" selected disabled>-- Pilih Buku --</option>
    <option value="Matematika">Matematika</option>
    <option value="Sejarah">Sejarah</option>
    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
    <option value="Bahasa Inggris">Bahasa Inggris</option>
    <option value="Infromatika">Informatika</option>
    <option value="IPA">IPA</option>
     </select><p>
     Keterangan :<textarea name="keterangan"></textarea><p>
     Jumlah Buku : <input type="text" name="jumlah_buku"
    placeholder="Jumlah"><p>
     <button type="submit" value="submit">Submit</button>
     <button type="reset" value="reset">Reset</button>
     </form>
     <p>&nbsp;</p>
  <p>&nbsp;</p>
  </article>
  
</section>

<footer>
  <p>Developed By Nama Anda</p>
</footer>

</body>
</html>
