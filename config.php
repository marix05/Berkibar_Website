<?php

    $koneksi = mysqli_connect("localhost", "root", "", "uas_db");

    if(mysqli_connect_errno())
    {
        echo "Gagal melakukan koneksi" . mysqli_connect_error();
    }

?>