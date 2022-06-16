<?php
require 'connect.php';
    $sql = "DELETE from employee where ID = '" . $_GET['id'] . "' ";
    $result = mysqli_query($conn,$sql);
    header('location:showEmployee.php');
?>