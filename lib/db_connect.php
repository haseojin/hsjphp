<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "test";


$con = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
mysqli_set_charset($conn, 'utf8'); 
mysql_query("set names utf8");

if ($con->connect_errno) { die('Connection Error : '.$con->connect_error); } // 오류가 있으면 오류 메세지 출력

?>