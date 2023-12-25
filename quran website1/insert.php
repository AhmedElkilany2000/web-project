<?php

$username = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

include "connect.php";

$insert = "INSERT INTO users 
                (name , phone , email , address)
             VALUES 
                ('$username' , '$phone' , '$email' , '$address')";
                
$query = $conn -> query($insert);

if($query){
    header('location: index.html');
}else{
    echo $conn -> error ;
}