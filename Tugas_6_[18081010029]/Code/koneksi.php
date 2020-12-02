<?php

    $host = "localhost";//host database
    $username = "root";//username database
    $password = "";//password database
    $db = "web_profile";

    $koneksi = mysqli_connect($host,$username,$password,$db);
    
    
    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi,$query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
    }
    return $rows;
}

    function tambah($data){
        global $koneksi;
        // ambil data dari tiap elemen
        $Jenjang_Pendidikan = htmlspecialchars($data["Jenjang_Pendidikan"]);
        $Nama_Sekolah = htmlspecialchars($data["Nama_Sekolah"]);

        //query insert data
        $query = "INSERT INTO education
        VALUES
        ('$Jenjang_Pendidikan','$Nama_Sekolah')";
        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);

    }
    
    
?>