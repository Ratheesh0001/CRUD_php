<?php
include('dbconnection.php');
if(isset($_GET['delid'])) {
$id = $_GET['delid'];
$sql = mysqli_query($con, "delete from crudoperation where ID='$id'");
if($sql) {
echo "<script>alert('record deleted')</script>";
echo "<script type='text/javascript'> document.location = 'View.php';</script>";
} else {
echo "<script>alert('There was an error')</script>";
}
}
?>