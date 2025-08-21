<?php
    include 'connect.php';

    $un = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO tbl(username, password) 
                VALUES('$un', '$pass')";
    
    $run = mysqli_query($con, $query);

    if ($run) {
        header('location: index.php');
    } else {
        echo "Upload Failed ❌";
    }
?>