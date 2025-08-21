<?php
    include 'connect.php';

    $query = "SELECT * FROM tbl ORDER BY id DESC";
    $run = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>For Final</title>
    <link rel="stylesheet" href="style.css">

    <!-- Table border style part -->
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <?php
    if (mysqli_num_rows($run) > 0) {            // Check if table has more than 0 rows
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($run)) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>          <!--  use the table column names like: id, username, password... -->
            <td><?= $row['username'] ?></td>    <!--  use the table column names like: id, username, password... -->
            <td><?= $row['password'] ?></td>    <!--  use the table column names like: id, username, password... -->
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    } else {
        echo "Opps, No Data Found!";            // If table has no rows Show this message
    }
    ?>

    <br><br>

    <a href="index.php">Go Back 🔙</a>

</body>
</html>