<?php
include "../configs/information_db.php";
$id = $_GET['ali'];
$user= $_GET['id'];

$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);

mysqli_select_db($link,'todo');
$sql = "update mount set status=1 where  id=$id";

mysqli_query($link,$sql);

header('location: http://localhost/todo/views/hi.php?id='.$user);