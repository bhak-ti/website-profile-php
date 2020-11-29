<?php
  include "koneksi.php";

  $sql =  "CREATE TABLE user(
    id int primary key, nama varchar(40),
    role varchar(40), availability varchar(40),
    age int, location varchar(50),
    years_experience varchar(50),
    email varchar(50))";

    
    if ($koneksi->query($sql) == true){
      echo " tabel berhasil dibuat";
    }else{
      echo " tabel gagal dibuat";
    }
?>