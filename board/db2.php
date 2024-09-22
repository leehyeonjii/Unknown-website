<?php

    error_reporting(1);
    ini_set("display_errors",1);

    $connect = mysqli_connect('localhost', 'root', '1234', 'login');

    if(!$connect)
    {
        echo "DB 접속 실패";
    }
    ?>