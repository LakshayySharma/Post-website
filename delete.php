<?php
    include 'database.php';
    $id = $_GET['id'];
    $query = "DELETE FROM `posts` WHERE `posts`.`id` = $id";
    mysqli_query($conn,$query);
    header('location:home.php');
?>