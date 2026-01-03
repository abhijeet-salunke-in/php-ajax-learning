<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container
		{
			margin-left: -35px;
			margin-top: 15px;

		}
	</style>
</head>
<body>

<div class="container">
<table class="table table-bordered" width="75%">
	<tr>
		
		<th>Srno</th>
		<th>Name</th>
		<th>Mobile No.</th>
    	<th>Wattsapp No.</th>
   		<th>Address</th>
		<th>Date of Inquiry</th>
    	<th>Institution</th>
    	<th>Class</th>
		<th>Cources</th>
		<th>Fees</th>
		<th>Father Occupation</th>
		
	</tr>

<?php
 
    $con=mysqli_connect("localhost","root","","abhiajax");
    $query="select * from inquiry";

    $read=mysqli_query($con,$query);

    $Srno=0;  
    while($row =mysqli_fetch_array($read))
    {
     
    	$Srno++;
     
    echo"

<tr>
	<td>$Srno</td>
    <td>$row[name]</td>
    <td>$row[mobile]</td>
    <td>$row[watts_no]</td>
    <td>$row[address]</td>
    <td>$row[date]</td>
    <td>$row[institution]</td>
    <td>$row[class]</td>
    <td>$row[cources]</td>
    <td>$row[fees]</td>
    <td>$row[occupation]</td>
  
</tr>

    ";
    }
          
     ?>

</table>
</body>
</html>