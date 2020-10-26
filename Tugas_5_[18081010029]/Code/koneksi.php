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
?>