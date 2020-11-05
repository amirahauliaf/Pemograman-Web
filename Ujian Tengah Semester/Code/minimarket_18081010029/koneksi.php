<?php
//koneksi ke database
$conn=mysqli_connect("localhost","root","","barokah");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    // ambil data dari tiap elemen
    $sku = htmlspecialchars($data["sku"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $jumlah_stock = htmlspecialchars($data["jumlah_stock"]);
    $harga_satuan = htmlspecialchars($data["harga_satuan"]);

    //query insert data
    $query = "INSERT INTO barokah
    VALUES
    ('$sku','$nama_barang','$kategori','$jumlah_stock','$harga_satuan')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function ubah($data){
    global $conn;

    $sku = htmlspecialchars($data["sku"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $jumlah_stock = htmlspecialchars($data["jumlah_stock"]);
    $harga_satuan = htmlspecialchars($data["harga_satuan"]);

    //query update data
    $query = "UPDATE barokah SET
                sku='$sku',
                nama_barang='$nama_barang',
                kategori = '$kategori',
                jumlah_stock = $jumlah_stock,
                harga_satuan = $harga_satuan
            WHERE sku='$sku'";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query = "SELECT * FROM barokah
                 WHERE 
            sku LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%'OR
            nama_barang LIKE '%$keyword%'
            ";
    return query($query);
}

function rangeharga($harga1,$harga2){
    $query = "SELECT * FROM barokah
                 WHERE harga_satuan
                 BETWEEN $harga1 AND $harga2
            ";
    return query($query);
}

?>