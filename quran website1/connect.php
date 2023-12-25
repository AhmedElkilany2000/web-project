<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "project";

$conn = new mysqli("localhost", "root" ,"" ,"project" );

if($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}else{
    echo "connection successfully";
}
