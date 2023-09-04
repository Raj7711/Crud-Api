<?php
include('config.php');
$imgDir='uploads/';
if(isset($_POST['save'])){
     $bussiness_id="BSID".rand(100,1000);
    $bname=$_POST['bname'];
    $baddress=$_POST['baddress'];
    $bemail=$_POST['bemail'];
    $bnumber=$_POST['bnumber'];
    $bdiscription=$_POST['bdiscription'];
    // $create_date=$_POST['create_date'];
    // $update_date=$_POST['update_date'];
    $create_date=date('Y-m-d');
        foreach($_FILES['bimage']['tmp_name'] as $key=>$value){
        $filename=$_FILES['bimage']['name'][$key];
      
        $mimes=$_FILES['bimage']['tmp_name'];
        $imagename=rand(100,1000)."_"."bimages"."_".$filename;
      
        move_uploaded_file($value,$filename);
        }
        // $filename=$_FILES['image']['name'];
        // $mimetype=$_FILES['image']['tmp_name'];
        // move_uploaded_file($mimetype,$filename);

       

// $sql="INSERT INTO `bussiness_details` (Id1, Name1, City1)
// OUTPUT inserted.Id1, inserted.Name1, inserted.City1
// INTO `bussiess_image`
// VALUES(1,'Komal','Delhi'), (2, 'Khushi','Noida')";


//$sql="INSERT INTO `bussiness_details` (`bussiness_id`, `bname`, `baddress`, `bemail`, `bnumber`, `bdiscription`, `create_date`, `update_date`) VALUES ( '$bussiness_id', '$bname', '$baddress', '$bemail', '$bnumber','$bdiscription' ' $create_date', ' $update_date')";
//$sql="INSERT INTO bussiness_details (`bussiness_id`, `bname`, `baddress`, `bemail`, `bnumber`, `bdiscription`, `create_date`, `update_date`) VALUES (' $bussiness_id', '$bname', '$baddress', '$bemail', '$bnumber', '$bdiscription', '$create_date', '$update_date', '$imagename')";
//  $sql="INSERT INTO students(`name`,`age`,`job`,`distric`,`state`,`pincode`)VALUES('$name','$age','$job','$distric','$state','$pincode')";
// print_r($sql);
$sql="INSERT INTO bussiness_image(bussiness_id,bussiness_img,create_date)VALUES('$bussiness_id','$imagename','$create_date')";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    print_r($row);
}
// print_r($result);
 
   
//} 

}

?>