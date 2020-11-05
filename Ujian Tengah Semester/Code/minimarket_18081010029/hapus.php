<?php
require 'koneksi.php';

// ambil data di URL
$sku = $_GET["sku"];


mysqli_query($conn,"DELETE FROM barokah WHERE sku='$sku'");

header("Location: index.php");
?>