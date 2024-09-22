<?php

$db = mysqli_connect('localhost', 'root', '1234', 'login');

if(!$db)
{
    echo "DB 접속 실패";
}
?>