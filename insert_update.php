<?php
include('config.php');

$email=$_GET['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$state=$_POST['state'];


// $name=$_POST['name'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];
// $state=$_POST['state'];
// $sql="SELECT * FROM users WHERE `email`='$email'";
$sql="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $sql = "UPDATE users SET name='$name',phone='$phone', state='$state' WHERE email='$email'"; 
    
    $result=mysqli_query($con,$sql);
    print_r($result);
    if($result){
        echo"data is updated";
    }
    

    }
    else{
       
        $sql="INSERT INTO users(name, email, phone, state)VALUES('$name','$email','$phone','$state')";
        
         $result=mysqli_query($con,$sql);
        if($result){
            echo"data is inserted successfully";
        }
        

    }



?>