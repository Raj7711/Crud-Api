<?php

$con=mysqli_connect('localhost','root','','crud');


$sql="SELECT * FROM product";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View data</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
  
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
   
<table class="table table-hover">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <?php
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc()){
    ?>

  <tbody>
    <tr>
      <!-- <th scope="row"><?php echo$row['id']?></th> -->
      <td><?php echo$row['name']?></td>
      <td><?php echo$row['price']?></td>
      
      <td>
      <a class="btn btn-info" href="old.php?id=<?php echo $row['id']; ?>">Edit</a></td>
          <td> <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    
    </tr>
    <?php

}
}
?>
  </tbody>
</table>
</div>
</div>
</div>

  </div>
</div>

   
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>


</html>
