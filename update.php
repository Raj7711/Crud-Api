<?php
//  header("Access-Control-Allow-Origin: *");
//  header("Content-Type: application/json; charset=UTF-8");
//  header("Access-Control-Allow-Methods: POST");
//  header("Access-Control-Max-Age: 3600");
//  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
//  $search_id=isset($_GET['id'])? $_GET['id']:die();
//         $data=json_decode(file_get_contents("php://input"),true);
//         //$student_id=$data['id']

//        include('config.php');
//         $id=$_GET['id'];
//          $sql="SELECT * FROM students WHERE id='$id'";
//          $result=mysqli_query($con,$sql);

//          if(mysqli_num_rows($result)>0){
//             $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
//             echo json_encode($output);
//          }
        //$search_id=isset($_GET['id'])? $_GET['id']:die();

       // $data=json_decode(file_get_contents("php://input"),true);
       include('config.php');
       if(isset($_GET['id'])&& $_GET['id']!=""){
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
        //echo $name;
            // echo$_GET['id'];
                $search_id=$_GET['id'];
                // $name=$_GET['name'];
                // $age=$_GET['age'];
                // $job=$_GET['job'];
                // $distric=$_GET['distric'];
                // $state=$_GET['state'];
                // $pincode=$GET['pincode'];
                
                //$sql="UPDATE students SET `name`='$name' `age`='$age', `job`= '$job',`distric`='$distric',`state`='$state',`pincode`='$pincode' WHERE id='$search_id'";
                $sql = "UPDATE students SET name='$name',age='$age',job='$job' ,distric='$distric', state='$state',pincode='$pincode' WHERE id='$search_id'"; 

                //$sql1="UPDATE students SET name='$name', age='$age',job='$job',distric='$distric',state='$state' pincode='$pincode'   WHERE id='$search_id'";
            // $result=mysqli_query($con,$sql);
                
            if(mysqli_query($con,$sql)){
                echo"data is updated succesfully";
            }
            else{
                echo"data is not updated yet";
            }
            }
?>