<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pert13";
    //membuat koneksi
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    //cek koneksi
    if(!$conn){
        die ("Koneksi gagal". mysqli_connect_error());
    } 
  
?>