<!DOCTYPE html>
<html>
<head></head>
<body>
 <form action="#" method="POST">
<h2>Insert Record</h2>
 <input type="text" name="txt_name" placeholder="Enter name">
<br><br>
 <input type="number" name="txt_mobile" placeholder="Enter mobile ">
<br><br>
 <input type="submit" name="btn_save" value="Save">
 
<a href="show.php">Show Records</a>
 </form>

<?php

$con = mysqli_connect("localhost","root","","crud");

if(isset($_POST['btn_save']))
{
    mysqli_query($con,"insert into inquiry(name,mobile)values('".$_POST['txt_name']."','".$_POST['txt_mobile']."')");

        echo "<script>alert('Data saved');</script>";
        echo "<script>window.location='show.php';</script>";
}

?>

</body>
</html>