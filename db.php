<?php 
$server= "db";
$username="Capy1"; 
$password="123";
$dbname= "Capy1";

$conn = new mysqli ($server, $username, $password, $dbname);

if ($conn->connect_error){

    die("Connection failed; " .$conn->connect_error);
}


?>