<?php
require 'koneksi.php';

// ambil data di URL
$Jenjang_Pendidikan = $_GET["Jenjang_Pendidikan"];


mysqli_query($koneksi,"DELETE FROM education WHERE Jenjang_Pendidikan='$Jenjang_Pendidikan'");

header("Location: index.php");
?>