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
  <a href="form-tambah-buku.php">Tambah Buku</a>
    <table border="1px">
    <tr>
        <td>No</td>
        <td>ID Buku</td>
        <td>Judul Buku</td>
        <td>Kategori Buku</td>
        <td>Keterangan</td>
        <td>Jumlah Buku</td>
        <td>Aksi</td>
    </tr>
    <?php
    include "config/koneksi.php";
    $no = 1;
    $sql_buku  = mysqli_query($koneksi, "SELECT * FROM buku");
    while($data_buku = mysqli_fetch_array($sql_buku)){    
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data_buku['id_buku']; ?></td>
        <td><?php echo $data_buku['judul_buku']; ?></td>
        <td><?php echo $data_buku['kategori_buku']; ?></td>
        <td><?php echo $data_buku['keterangan']; ?></td>
        <td><?php echo $data_buku['jumlah_buku']; ?></td>
        <td><a href="form-edit-buku.php?id_buku=<?php echo $data_buku['id_buku']; ?>">Edit</a> | <a href="aksi-hapus-buku.php?id_buku=<?php echo $data_buku['id_buku']; ?>"> Hapus</a> </td>
    </tr>
    <?php } ?>
    </table>
  </article>
</section>

<footer>
  <p>Developed By Nama Anda</p>
</footer>

</body>
</html>
