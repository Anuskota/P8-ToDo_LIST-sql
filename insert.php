<?php
echo $LIST = $_POST['list'];
include "conexion.php";
mysqli_query($conecction, "INSERT INTO `todo-list`(`list`) VALUES ('$LIST')");
header("location:index.php");

?>