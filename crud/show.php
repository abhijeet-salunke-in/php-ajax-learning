<!DOCTYPE html>
<html>

<head></head>

<body>
    <a href="insert.php">Insert Record </a>
    <table border="1" cellpadding="10" width="100%">
        <tr>
            <th>Srno</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Options</th>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "crud");
        // $query = "select * from inquiry ORDER BY id desc ";
        $query = "select * from inquiry";
        $read = mysqli_query($con, $query);
        $no = 0;
        while ($row = mysqli_fetch_array($read)) {
            $no++;
            echo "
                <tr>
                    <th>$no</th>
                    <th>$row[name]</th>
                    <th>$row[mobile]</th>
                    <th>
                        <a href='delete.php?id=$row[id]'>Del</a>
                        <a href='update.php?id=$row[id]'>Up</a>
                    </th>
                </tr>
            ";
        }
        
        ?>
    </table>
</body>

</html>