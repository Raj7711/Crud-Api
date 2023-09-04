<?php
include('config.php');
$search_id=isset($_GET['id'])?($_GET['id']):die();

// $name=$_GET['name'];
// $email=$_GET['email'];
// $number=$_GET['number'];
// $user=$_GET['user'];
// $message=$_GET['message'];
// $create_date=date("Y-m-d");
// $feedback=$_GET['feedback'];
// if(isset($_FILES['image'])){
//     $filename=$_FILES(['image']['name']);
//     $mimetype=$_FILES(['image']['tmp_type']);
//     move_uploaded_file($filename,$mimtype);
// }

$sql="DELETE FROM customers WHERE `id`='$search_id'";
$result=mysqli_query($con,$sql);
if($result){
    echo"data is deleted successfully";
}
else{
    echo"something is wrong";
}

?>