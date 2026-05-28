<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<title>Records</title>

</head>

<body>

<div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">

<div class="bg-white p-4 w-100 rounded">
<a href="Create.php" class="btn btn-success algin-right">Add +</a>
<table class=table>
    <thead>
        <th>Name</th>
        <th>Date</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </thead>
<tbody>
    <?php
    include('dbconnection.php');
     $fetch = mysqli_query($con, "select * from crudoperation");
     $row = mysqli_num_rows($fetch);
     if($row >0){
        while($r = mysqli_fetch_array($fetch)){
            ?>

            <tr>
                <td><?php echo $r['name']?></td>
                <td><?php echo $r['date']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['address']?></td>
                <td><a href="Update.php?id=<?php echo $r['id'] ?>" class ="btn btn-sm btn-info">Update</a>
                <a href="Delete.php?delid=<?php echo $r['id'] ?>" class ="btn btn-sm btn-danger">Delete</a></td>
            </tr>
            <?php 
        }
     }


 ?>
</tbody>
</table>
</div>
</div>  
</body>
</html>