<?php
    include 'connect.php';

    $id = $_GET['id'];

    $query = "DELETE FROM tbl WHERE id='$id'";
    $run = mysqli_query($con, $query);

    if ($run) {
        header('location: search.php');
    } else {
        echo "Delete Failed ❌";
    }
?>