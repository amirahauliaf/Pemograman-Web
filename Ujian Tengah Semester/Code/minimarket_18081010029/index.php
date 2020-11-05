<?php
require 'koneksi.php';
$barokah = query("SELECT * FROM barokah");

//pencarian
if(isset($_POST["cari"])){
    $barokah = cari($_POST["keyword"]);
}
//Range harga
if(isset($_POST["rangeharga"])){
    $barokah = rangeharga($_POST["harga1"], $_POST["harga2"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Halaman Admin</title>
</head>
<body>
    <!--Bagian Header-->
    <header>
            <div class="nav">
                <h1><a href=""><img src="assets/img/logo.png" >arokah Admin</a></h1>
            </div>
    </header>

    <!--Tampil Data-->
    <section id="tampil" class="tampil">
        <div class="container card">
            <div class="judul">
                <h3><img src="assets/img/ebook.png" >Data Barang</h3>
            </div>

             <!--sambungan tambah data-->
            <div class="tambah">
                <h3><a href="tambah.php"><img src="assets/img/shopping-cart.png"> Tambah Data</a></h3>
            </div>

            <!--Form Pencarian-->
            <form action="" method="POST" id="cari">
                <input type="text" name="keyword" placeholder="Pencarian" autocomplete="off">
                <button type="submit" name="cari">Cari</button>
            </form>
            
            <!-- Form Range-->
            <form action="" method="POST" id="range">
                <p>Dari Harga : <input type="text" name="harga1">
                    Sampai Harga : <input type="text" name="harga2">
                <button type="submit" name="rangeharga">Cari</button>
                </p>
            </form>
            
            <br>
             <!--Tabel Data-->
            <table >
                <tr>
                    <th>No.</th>
                    <th>SKU</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Jumlah Stock</th>
                    <th>Harga Satuan</th>
                    <th>Opsi</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($barokah as $row):?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["sku"];?></td>
                    <td><?= $row["nama_barang"];?></td>
                    <td><?= $row["kategori"];?></td>
                    <td><?= $row["jumlah_stock"];?></td>
                    <td><?= $row["harga_satuan"];?></td>
                    <td>
                        <a href="ubah.php?sku=<?= $row["sku"];?>">Ubah</a> |
                        <a href="hapus.php?sku=<?php echo $row["sku"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>       
            </table>
                    
        </div>
    </section>
</body>
</html>