<?php

$server = "localhost";
$username = "tikako_user";
$password = "password123";
$database = "tikakohotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>