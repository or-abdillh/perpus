<html>
<head>
<title>CETAK LAPORAN BUKU</title>
</head>
<body>
<table border="1px">
    <tr>
        <td>No</td>
        <td>ID Buku</td>
        <td>Judul Buku</td>
        <td>Kategori Buku</td>
        <td>Keterangan</td>
        <td>Jumlah Buku</td>
    
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

    </tr>
    <?php } ?>

	<script>
		window.print();
	</script>
    </body>
    </table>
	</html>
