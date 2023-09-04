<?php
header('Content-type:application/json');
header('Access-control-Allow-origin:*');
header('Access-control-Allow-methods:POST');
header('Access-control-Allow-Headers:Access-control-Allow-Headers,Content-type,Access-control-Allow-origin,Access-control-Allow-methods,Authorization,X-Requested-methods');
include('config.php');

$data=json_decode(file_get_contents("php://input"),true);

$search_id=isset($_GET['id'])? $_GET['id']:die();


//$data=json_decode(file_get_contents("php://input"),true);


$sql="DELETE FROM `students` WHERE `students`.`id` = '$search_id'";
$result=mysqli_query($con,$sql);
if($result){
    echo"data is deleted";
}

?>