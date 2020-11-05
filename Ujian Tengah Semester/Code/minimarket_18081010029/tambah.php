<?php
require 'koneksi.php';
//cek apakah tombol submit sudah di tekan apa blm
if(isset($_POST["submit"])){

// cek apakah data berhasil ditambah atau tidak
if (tambah($_POST)>0){
    echo 
    "<script> alert('data berhasil ditambah');
                document.location.href='index.php'
    </script>";
}else{
    echo"<script> alert('data gagal ditambah');
    document.location.href='index.php';
</script>";
}
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="navtambah">
        <h1><img src="assets/img/shopping.png">Tambah Data Barang</h1>
    </div>
    <div class="container card">
    <form action="" method="POST">
        <table>
            <tr>
                <th><label for="sku">SKU  </label></th>
                <td><input type="text" name="sku" id="sku" required></td>
            </tr>
            <tr>
                <th><label for="nama_barang">Nama Barang  </label></th>
                <td><input type="text" name="nama_barang" id="nama_barang"required></td>
            </tr>
            <tr>
                <th><label for="kategori">Kategori  </label></th>
                <td>
                    <select name="kategori">
                        <option>--Pilih--</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="atk">ATK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="jumlah_stock">Jumlah Stock  </label></th>
                <td><input type="text" name="jumlah_stock" id="jumlah_stock"required></td>
            </tr>
            <tr>
                <th><label for="harga_satuan">Harga Satuan  </label></th>
                <td><input type="text" name="harga_satuan" id="harga_satuan"required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" >Simpan</button></td>
            </tr>
        </table>
    </form>
    </div>
    
    
</body>
</html>