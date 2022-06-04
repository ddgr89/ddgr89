<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sbionline';


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
     die("Connection Faild :" .$conn->connect_error);
}

?>