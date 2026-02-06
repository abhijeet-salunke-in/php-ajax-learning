<?php
//fetch id from search.php page.
$id = $_GET['id'];
// echo $id;
$con = mysqli_connect("localhost", "root", "", "crud");
$query = "select * from inquiry where id=" . $id . " ";
$read = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($read)) {
    $iid = $row['id'];
    $iname = $row['name'];
    $imobile = $row['mobile'];
}
?>

<!DOCTYPE html>
<html>

<head></head>

<body>
    <form action="#" method="POST">
        <h2>Update Record</h2>
        <input type="text" name="txt_name" placeholder="Enter name"
            value="<?php echo $iname; ?>">
        <input type="number" name="txt_mobile" placeholder="Enter
mobile " value="<?php echo $imobile; ?>">
        <input type="submit" name="btn_update" value="Update">
    </form>
</body>

</html>

<?php

$con = mysqli_connect("localhost", "root", "", "crud");

if (isset($_POST['btn_update'])) {
    mysqli_query($con, "update inquiry set name =
'" . $_POST['txt_name'] . "',mobile='" . $_POST['txt_mobile'] . "' where id=" . $id . " ");
    echo "<script>alert('Data Update');</script>";
    echo "<script>window.location='show.php';</script>";
}
?>