<?php

session_start();
session_destroy();
echo "<script>alert('Anda telah logout dari perpustakaan!'); window.location = 'login.php'</script>";
?>
