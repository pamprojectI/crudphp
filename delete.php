<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM member WHERE id='$id'";
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('Delete successfully');</script>";
        echo "<script>window.location='show_member.php';</script>";
    } else {
        echo "Error : " .$sql. "<br>" . mysql_error($conn);
        echo "<script>alert('Delete invalid');</script>";
    }
    mysqli_close($conn);
?>