<?php

include('config.php');
header('Content-type:application/json');
header('Access-Control-Allow-Origin:*');
$sql="SELECT * FROM students";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);

}
?>