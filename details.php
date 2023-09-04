<?php

include('config.php');
$id=$_GET['bussiness_id'];

$sql1="SELECT * FROM `bussiness_details` WHERE `bussiness_id`='$id'";
//$sql2="SELECT * FROM `bussiness_image` WHERE `bussiness_id`='$id'";


$result1=mysqli_query($con,$sql1);
//$result2=mysqli_query($con,$sql2);

if(mysqli_num_rows($result1)>0){
    $output=mysqli_fetch_all($result1,MYSQLI_ASSOC);
    echo  json_encode($output);
     }
 
    //  if(mysqli_num_rows($result2)>0){
    //     $output1=mysqli_fetch_all($result2,MYSQLI_ASSOC);
    //     echo json_encode($output1);
    //      }
           
?>