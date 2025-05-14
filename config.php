<?php 
$server_name='localhost';
$user='root';
$pass='';
$db_name='Artsight_db';

 
$conn = mysqli_connect($server_name,$user,$pass,$db_name);
if(!$conn){
    die("connection failed:".$conn->$connect_error);
}




?>
