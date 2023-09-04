<?php
include('config.php');
// if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["images"]) ) {
    $bname=$_POST['bname'];
    $baddress=$_POST['baddress'];
    $bemail=$_POST['bemail'];
    $bnumber=$_POST['bnumber'];
    $bdiscription=$_POST['bdiscription'];
    // $create_date=$_POST['create_date'];
    // $update_date=$_POST['update_date'];
    $businessId="BSID"."_".rand(100,1000);
    $create_date=date('Y-m-d');
    $uploadDir = "uploads/";

    // Create the upload directory if it doesn't exist
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $_FILES["images"];
    $numFiles = count($uploadedFiles["name"]);

    
  

    for ($i = 0; $i < $numFiles; $i++) {
        $tmpFilePath = $uploadedFiles["tmp_name"][$i];
        $fileName = basename($uploadedFiles["name"][$i]);
        $targetFilePath = $uploadDir . $fileName;

        if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
        
       $sql = "INSERT INTO bussiness_image (bussiness_id, bussiness_img,created_date) VALUES ('$businessId', '$fileName','$create_date')";
       $result=mysqli_query($con,$sql);
      if($result){
           echo"inserted";
      }
            //     if ($con->query($sql) === TRUE) {
        //         echo "File '$fileName' uploaded and inserted into database successfully.<br>";
        //     } else {
        //         echo "Error inserting file '$fileName' into database: " . $con->error . "<br>";
        //     }
        // } else {
        //     echo "Error uploading file '$fileName'.<br>";
        // }
    }
    }
    $sql1="INSERT INTO bussiness_details(bussiness_id,bname,baddress,bemail,bnumber,bdiscription,create_date)VALUES('$businessId','$bname','$baddress','$bemail','$bnumber','$bdiscription','$create_date')";
         $result1=mysqli_query($con,$sql1);
         if($result1){
            echo"table1 inserted";
         }
    $con->close();

?>