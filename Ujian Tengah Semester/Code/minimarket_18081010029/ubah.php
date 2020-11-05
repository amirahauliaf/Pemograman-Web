<?php
require 'koneksi.php';

// ambil data di URL
$sku = $_GET["sku"];

// query data mahasiswa berdasarkan id
$barokah = query("SELECT * FROM barokah WHERE sku = '$sku'")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Ubah Data</title>
</head>
<body>
    <div class="navtambah">
        <h1>Ubah Data Barang</h1>
    </div>
    <div class="container card">
    <form action="" method="POST">
        <table>
            <tr>
                <th><label for="sku">SKU  </label></th>
                <td><input type="text" name="sku" id="sku"readonly required
                value="<?= $barokah["sku"]; ?>" ></td>
            </tr>
            <tr>
                <th><label for="nama_barang">Nama Barang  </label></th>
                <td><input type="text" name="nama_barang" id="nama_barang"required
                value="<?= $barokah["nama_barang"]; ?>"></td>
            </tr>
            <tr>
                <th><label for="kategori">Kategori  </label></th>
                <td>
                    <select name="kategori">
                        <option>--Pilih--</option>
                        <option value="makanan"<?php echo $barokah['kategori']=='makanan'?'selected="selected"':''?>>Makanan</option>
                        <option value="minuman"<?php echo $barokah['kategori']=='minuman'?'selected="selected"':''?>>Minuman</option>
                        <option value="atk"<?php echo $barokah['kategori']=='atk'?'selected="selected"':''?>>ATK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="jumlah_stock">Jumlah Stock  </label></th>
                <td><input type="text" name="jumlah_stock" id="jumlah_stock"required
                value="<?= $barokah["jumlah_stock"]; ?>"></td>
            </tr>
            <tr>
                <th><label for="harga_satuan">Harga Satuan  </label></th>
                <td><input type="text" name="harga_satuan" id="harga_satuan"required
                value="<?= $barokah["harga_satuan"]; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" >Simpan</button></td>
            </tr>
        </table>
    </form>
    </div>
    
    
</body>
</html>