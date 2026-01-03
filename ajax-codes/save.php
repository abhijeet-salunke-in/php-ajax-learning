<?php
  
    $con= mysqli_connect("localhost","root","","abhiajax");

    mysqli_query($con,"insert into inquiry(name,mobile,watts_no,address,date,institution,class,cources,fees,occupation)values(
      '".$_POST['name']."',
      '".$_POST['mobile']."',
      '".$_POST['watts_no']."',
      '".$_POST['address']."',
      '".$_POST['date']."',
      '".$_POST['institution']."',
      '".$_POST['class']."',
      '".$_POST['cources']."',
      '".$_POST['fees']."',
      '".$_POST['occupation']."')");

    
    

?>