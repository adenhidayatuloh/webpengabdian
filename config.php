<?php

$server = "sql12.freemysqlhosting.net";
$username = "sql12732636";
$password = "L1JdweYeF6";
$database = "sql12732636";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>
