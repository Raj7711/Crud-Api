
<?php

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

include('config.php');
$sql="INSERT INTO students(`name`,`age`,`job`,`distric`,`state`,`pincode`)VALUES('$name','$age','$job','$distric','$state','$pincode')";
$result=mysqli_query($con,$sql);


if($result){
    echo"data inserted successfully";
}
else{
    echo"data is not inserted";
}
?>


