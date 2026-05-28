<?php
  include('dbconnection.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
      $date = $_POST['date'];
        $email = $_POST['email'];
          $address = $_POST['address'];

          $query = mysqli_query($con,"update crudoperation set name='$name',date='$date',email='$email',address='$address' where ID='$id'");
               if($query){
            echo"<script>alert(' data updated successfully  ')</script>";
            echo"<script  type='text/javascript'>document.location ='View.php';</script>";
          }
          else{
            echo"<script>alert('There was an error')</script>";
          }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<title>Update User</title>

</head>

<body>

<div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">

<div class="bg-white w-25 rounded p-3">

<h2 style="color:red;">Update</h2>
<form method="POST">
 
 <?php
    include('dbconnection.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,"select * from crudoperation where ID ='$id'");
    while($row = mysqli_fetch_array($query)){
            ?>
<div class="mb-2">

<input type="text" class="form-control"  value= "<?php echo $row['name'] ?>" name="name" placeholder="enter name"/ required>

</div>

<div class="mb-2">

<input type="date" class="form-control" value= "<?php echo $row['date'] ?>" name="date" placeholder="enter date of birth"/ required>

</div>

<div class="mb-2">

<input type="email" class="form-control" value= "<?php echo $row['email'] ?>" name="email" placeholder="enter email"/ required>

</div>

<div class="mb-2">

<input type="text" class="form-control" value= "<?php echo $row['address'] ?>" name="address" placeholder="enter address"/ required>

</div>
<?php } ?>
<button class="btn btn-success" type="submit">Update</button>

</form>
</div>
</div>
</body>
</html>