<?php


$firstname=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

if(isset($_POST['btn'])){


    $host="localhost";
    $user="root";
    $password="";
    $db="bis";
    
    $conn = mysqli_connect($host,$user,$password,$db);
    
    $insert = "insert into user values ('$firstname','$email','$subject','$message')";

    mysqli_query($conn,$insert);

    if($conn){
        echo(" done ");
        header('location: index.html');
    }
    else{
        echo("login faild");
    }



}