<?php
    $conn = mysqli_connect("loacalhost", "root", "", "b2-21");

    if(!$conn){
        die("Gagal terhubung ke database...".mysqli_connect_error());
    }
?>