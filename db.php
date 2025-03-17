<?php
    $host = "140.134.53.57";
    $dbuser = "D1256773";
    $dbpassword = "$zHRtTF3";
    $dbname = "db_acc";
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

    if ($link) {
        mysqli_query($link, "SET NAMES utf8");
        //echo "資料庫連接成功";
    } else {
        echo "資料庫連接失敗</br>" . mysqli_connect_error();
    }
?>