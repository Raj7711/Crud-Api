<?php include('search.php');?>

<?php

 header('Content-type:application/json');
 header('Access-control-Allow-origin:*');
 header('Access-control-Allow-methods:GET');
 header('Access-control-Allow-Headers:Access-control-Allow-Headers,Content-type,Access-Control-Allow-origin,Access-control-allow-methods,Authorization,X-Requested-methods');
 //$search_id=isset($_GET['id'])? $_GET['id']:die();
       // $data=json_decode(file_get_contents("php://input"),true);
        //$student_id=$data['id']

       include('config.php');
       $id=$_GET['id'];
       $sql="SELECT * FROM students WHERE id='$id'";
       $result=mysqli_query($con,$sql);

       if(mysqli_num_rows($result)>0){
        $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($output);
         }
//}
    
    ?>