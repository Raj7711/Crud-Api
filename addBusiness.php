<?php       

include('config  .php');  

$id =$_POST['id']; 
$name =$_POST['name']; 
$age  =$_POST['age']; 
$job =$_POST['job']; 
$distric =$_POST['distric']; 
$state  =$_POST['state']; 
$pincode  =$_POST['pincode']; 
// $email =$_POST['email']; 
// $pincode =$_POST['pincode']; 
// $mobileNumber =$_POST['mobileNumber']; 
// $whatsappNumber =$_POST['whatsappNumber']; 
// $fullAddress  =$_POST['fullAddress']; 
// $Description  =$_POST['Description']; 
// $brouchre  =$_POST['brouchre']; 
// $deviceId  =$_POST['deviceId']; 
// $contactpersonname  =$_POST['contactpersonname'];  

// $yearofeastablished  =$_POST['yearofeastablished'];  
// $gpslatitude  =$_POST['gpslatitude'];  
// $gpslongitude  =$_POST['gpslongitude'];  
// $gpsaddress  =$_POST['gpsaddress'];  
// $modePayment  =$_POST['modePayment'];  
// $tagLine  =$_POST['tagLine'];  

// $docs_otp = rand(100000 , 999999);
// $date = Date('Y-m-d'); 
     
    
// if(isset($_POST['id']))
// {
//    $countfiles = count($_FILES['brouchre']['name']);
//    $file = $_FILES['brouchre']['name'][0]; 

//    $on=$_FILES['brouchre']['name'];
//    $sn=$_FILES['brouchre']['tmp_name'];
//    $files = rand(111111111,999999999).'_'.$on;				
//    $dn="BrouchreUPLOAD/".$files;
//    $targetpath = "https://srankbazaar.com/API/BrouchreUPLOAD/".$files;
//    move_uploaded_file($sn,$dn); 

//    if($businesssubCategoryId == 0){
      
//       $sql = "INSERT INTO `business_detail`(`userId`, `businessId`, `businessCategoryId`, `businessCategoryName`, `businesssubCategoryId`, `businessSubCategoryName`, `businessName`, `businessImage`, `email`, `pincode`, `area`, `city`, `state`, `mobileNumber`, `contactpersonname`, `whatsappNumber`, `landlineCode`, `landlineNumber`, `fullAddress`, `gpslatitude`, `gpslongitude`, `gpsaddress`, `website`, `rating`, `totalUserRating`, `tagLine`, `Description`, `yearofeastablished`, `facebook_link`, `whatsapp_link`, `instagram_link`, `twitter_link`, `linkdin_link`, `brouchre`, `modePayment`, `gstin`, `deviceId`, `create_at`) VALUES ('$userId','$businessId','$businessCategoryId','$businessCategoryName','$businessCategoryId','$businessSubCategoryName','$businessName','https://srankbazaar.com/API/businessLogo/logo.png','$email','$pincode','na','na','na','$mobileNumber','$contactpersonname','$whatsappNumber','na','na','$fullAddress','$gpslatitude','$gpslongitude','$gpsaddress','www.srankbazaar.com','0','0','$tagLine','$Description','$yearofeastablished','na','na','na','na','na','$targetpath','$modePayment','na','$deviceId','$date')"; 
      
//    }else{
      
//       $sql = "INSERT INTO `business_detail`(`userId`, `businessId`, `businessCategoryId`, `businessCategoryName`, `businesssubCategoryId`, `businessSubCategoryName`, `businessName`, `businessImage`, `email`, `pincode`, `area`, `city`, `state`, `mobileNumber`, `contactpersonname`, `whatsappNumber`, `landlineCode`, `landlineNumber`, `fullAddress`, `gpslatitude`, `gpslongitude`, `gpsaddress`, `website`, `rating`, `totalUserRating`, `tagLine`, `Description`, `yearofeastablished`, `facebook_link`, `whatsapp_link`, `instagram_link`, `twitter_link`, `linkdin_link`, `brouchre`, `modePayment`, `gstin`, `deviceId`, `create_at`) VALUES ('$userId','$businessId','$businessCategoryId','$businessCategoryName','$businesssubCategoryId','$businessSubCategoryName','$businessName','https://srankbazaar.com/API/businessLogo/logo.png','$email','$pincode','na','na','na','$mobileNumber','$contactpersonname','$whatsappNumber','na','na','$fullAddress','$gpslatitude','$gpslongitude','$gpsaddress','www.srankbazaar.com','0','0','$tagLine','$Description','$yearofeastablished','na','na','na','na','na','$targetpath','$modePayment','na','$deviceId','$date')"; 
//    }

//    $result = mysqli_query($con, $sql);  

// } 
	    $sql="UPDATE students SET name='$id' age='$age' job='$job', distric='$distric' ,state='$state','pincode'='$pincode' WHERE id='id'";
	    $result=mysqli_query($con,$sql);

	if($result){
      echo"data is updated successfully";
   }	 
			 
// if($result){  
//    $response['status']="200";   
//    $response['message']=$businessId;   
//    echo json_encode($response);
   
//    $sql = "UPDATE `register_login_tb` SET `bussiness_owner`='1' WHERE srank_id = '$userId' ";

//    $result = mysqli_query($con, $sql);  
   
// }
// else{ 
//       $response['status']="400";   
//       $response['message']='Try Again';   
//       echo json_encode($response);
// }

      
?>  