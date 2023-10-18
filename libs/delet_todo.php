<?php
include '../configs/information_db.php';
$id_mount = $_GET['ali'];
$id_user= $_GET['id'];

$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);
mysqli_select_db($link, 'todo');




$sql = "delete from mount where $id_mount=id";
mysqli_query($link,$sql);


header('location: http://localhost/todo/views/hi.php?id='.$id_user);