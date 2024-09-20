<?php

include '../config.php';

$id = $_GET['id'];

$sql ="Select * from roombook where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $RoomType = $row['RoomType'];
    $noofday = $row['nodays'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $stat = $row['stat'];
}


if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE roombook SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){

        $type_of_room = 0;      
        if($RoomType=="Kamar Atas")
        {
            $type_of_room = 350000;
        }
        else if($RoomType=="Kamar Bawah")
        {
            $type_of_room = 300000;
        }
        else if($RoomType=="Kamar Besar")
        {
            $type_of_room = 400000;
        }
        
        
        
       
                                                            
        $ttot = $type_of_room *  $noofday ;
        $fintot = $ttot ;

        $psql = "INSERT INTO payment(id,Name,Email,RoomType,cin,cout,noofdays,roomtotal,finaltotal) VALUES ('$id', '$Name', '$Email', '$RoomType','$cin', '$cout', '$noofday', '$ttot',  '$fintot')";

        mysqli_query($conn,$psql);

        header("Location:roombook.php");
    }
}
?>