<?php
include 'information_db.php';

$link=mysqli_connect($db['hast'],$db['user-name'],$db['pass']);
mysqli_select_db($link, 'todo');

$sql_max_id="select max(id) from mount";
$add=mysqli_query($link,$sql_max_id);

$id_max_mount=implode(mysqli_fetch_assoc($add));










