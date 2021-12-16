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
include "config/koneksi.php";
$id_buku  = $_GET['id_buku'];
$sql_buku =  mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
$data_buku=mysqli_fetch_array($sql_buku);
?>
<article>
<form action="aksi-edit-buku.php" method="POST">
<h1>EDIT DATA BUKU</h1>
ID Buku : <input type="text" name="id_buku" value="<?php echo $data_buku['id_buku']; ?>"><p>
Judul Buku : <input type="text" name="judul_buku" value="<?php echo $data_buku['judul_buku']; ?>"><p>
Kategori Buku :
<select name="kategori_buku">
<option value="" selected disabled>-- Pilih Buku --</option>
<option value="Matematika">Matematika</option>
<option value="Sejarah">Sejarah</option>
<option value="Bahasa Indonesia">Bahasa Indonesia</option>
<option value="Bahasa Inggris">Bahasa Inggris</option>
<option value="Informatika">Informatika</option>
<option value="IPA">IPA</option>
</select><p>
Keterangan :<textarea name="keterangan"><?php echo $data_buku['keterangan']; ?></textarea><p>
Jumlah Buku : <input type="text" name="jumlah_buku"
value="<?php echo $data_buku['judul_buku']; ?>"><p>
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
