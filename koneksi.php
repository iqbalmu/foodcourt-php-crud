<?php

$hostname = "localhost";
$username = "root";
$password = "123";
$database = "db_foodcourt";

$db = mysqli_connect($hostname, $username, $password, $database);

if(!$db){
  die("Gagal menghubungkan ke database");
}
// else{
//   echo "success";
// }
?>