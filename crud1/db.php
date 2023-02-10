<?php 
$servername= "webprog23_db_1";
$username="Capy1"; 
$password="Capybaramarkus28";
$dbname= "studentInfo";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error){

    die("Connection failed; " .$conn->connect_error);
}


?>