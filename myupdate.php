<?php
 $search_id=isset($_GET['id'])? $_GET['id']:die();
 include('config.php');
 header('Content-type:application/json');
 header('Access-control-Allow-origin:*');
 header('Access-control-Allow-methods:POST');
 header('Access-control-Allow-Headers:Access-control-Allow-Headers,Content-type,Access-control-Allow-origin,Access-control-Allow-methods,Authorization,X-Requested-methods');
 $data=json_decode(file_get_contents("php://input"),true);

 $name=$data['name'];
 $age=$data['age'];
 $job=$data['job'];
 $distric=$data['distric'];
 $state=$data['state'];
 $pincode=$data['pincode'];
 
 $sql = "UPDATE students SET name='$name',age='$age',job='$job' ,distric='$distric', state='$state',pincode='$pincode' WHERE id='$search_id'"; 
 if(mysqli_query($con,$sql))
 {
    echo"data is updated successfully";
 }
?>