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
    <link rel="stylesheet" href="assets/style/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <div class="navtambah">
        <h1>Tambah Data </h1>
    </div>
    <div class="container card" id="tambah">
    <form action="" method="POST">

        <table>
            <tr>
                <th><label for="Jenjang_Pendidikan">Jenjang Pendidikan  </label></th>
                <td><input type="text" name="Jenjang_Pendidikan" id="Jenjang_Pendidikan"required></td>
            </tr>
            <tr>
                <th><label for="Nama_Sekolah">Nama Sekolah  </label></th>
                <td><input type="text" name="Nama_Sekolah" id="Nama_Sekolah"required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" >Simpan</button></td>
            </tr>
        </table>
    </form>
    </div>


    
    
</body>
</html>