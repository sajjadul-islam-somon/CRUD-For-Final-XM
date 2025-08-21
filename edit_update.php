<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM tbl WHERE id='$id'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($run);
?>



<!-- HTML part -->
<!DOCTYPE html>
<html>
<head>
    <title>For Final</title>
    <link rel="stylesheet" href="style.css">
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


    <!-- Simple Input Form     -->
    <form action="set_update.php" method="POST">
        <h2>Simple Form</h2>
        <input type="hidden" id="id" name="id" value="<?= $row['id'] ?>">

        <label for="uname">Username :</label>
        <input type="text" id="uname" name="uname" value="<?= $row['username'] ?>" reqired>
        <br><br>

        <label for="pass">Password :</label>
        <input type="password" id="pass" name="pass" value="<?= $row['password'] ?>" reqired>
        <br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>