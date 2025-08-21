<?php
include 'connect.php';

if (isset($_GET['search'])) {
    $token = $_GET['search'];
    $query = "SELECT * FROM tbl WHERE username LIKE '%$token%' OR password LIKE '%$token%'";
} else {
    $query = "SELECT * FROM tbl ORDER BY id DESC";
}

$run = mysqli_query($con, $query);
?>


<!-- HTML part -->
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
    <!-- Simple Navbar -->
    <nav>
        <div class="left-part">
            <a href="index.php">For Final</a>
        </div>

        <div class="middle-part">
            <a href="index.php">Home Page 🏠</a>
            <a href="fetch.php">Show All Data 🈸</a>
            <a href="search.php">Search Data 🔎</a>
        </div>

        <div class="right-part">
            <h4>😃Thank You</h4>
        </div>
    </nav>


    <!-- Search Input -->
    <form action="" method="GET">
        <input type="text" id="search" name="search">
        <button type="submit">🔎</button>
    </form>

    <hr>

    <?php
    if (mysqli_num_rows($run) > 0) {            // Check if table has more than 0 rows
    ?>
        <table>
            <tr>
                <th>ID </th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions </th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <tr>
                    <td><?= $row['id'] ?> </td> <!--  use the table column names like: id, username, password... -->
                    <td><?= $row['username'] ?> </td> <!--  use the table column names like: id, username, password... -->
                    <td><?= $row['password'] ?> </td> <!--  use the table column names like: id, username, password... -->
                    <td>
                        <a href="delete.php?id=     <?= $row['id'] ?>">Delete</a>
                        |
                        <a href="edit_update.php?id=<?= $row['id'] ?>">Update</a>
                    </td>
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
</body>
</html>