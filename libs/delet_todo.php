<?php
include '../configs/information_db.php';
$id_mount = $_GET['ali'];
$id_user= $_GET['id'];

$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);
mysqli_select_db($link, 'todo');




$sql = "delete from mount where $id_mount=id";
mysqli_query($link,$sql);
$sql_max_id="select count(id) from mount";
$add=mysqli_query($link,$sql_max_id);

$id_max_mount=implode(mysqli_fetch_assoc($add));

header('location: http://localhost/todo/views/hi.php?id='.$id_user.'&&id_max='.$id_max_mount);