<?php
    include 'connect.php';

    $id = $_POST['id'];
    $un = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "UPDATE tbl SET username='$un', password='$pass' WHERE id='$id'";
    $run = mysqli_query($con, $query);

    if ($run) {
        header('location: search.php');
    } else {
        echo "Update Failed ❌";
    }
?>