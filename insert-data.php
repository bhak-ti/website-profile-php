<?php
  include "koneksi.php";

  $sql  = " INSERT INTO user
   (id, nama, role, availability, age, location, years_experience, email)
  VALUE ('1','Bhakti','Frontend Developer','Full Time','20','Jatirogo','2','lfcbhakti@gmail.com')";

  if($koneksi->query($sql)==true){
    echo  "data berhasil diinput";
  }else{
    echo  "data gagal diinput";
  }
?>