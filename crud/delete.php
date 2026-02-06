<?php
$con = mysqli_connect("localhost", "root", "", "crud");
$id = $_GET['id'];
echo $id;
mysqli_query($con,"delete from inquiry where id = ".$id." ");
echo "<script>alert('Data deleted');</script>";
echo "<script>window.location='show.php';</script>";
?>