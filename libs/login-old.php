<?php

global $db;
include '../bootstrop/init.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $ali='ali';
    header("location: http://localhost/todo/index.php?ali=".$ali);
    exit();
}


$email = $_POST['email'];
$pass = $_POST['pass'];

$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);
mysqli_select_db($link, 'todo');

$sql_max_id="select max(id) from user";
$add=mysqli_query($link,$sql_max_id);

$add=implode(mysqli_fetch_assoc($add));

$i=0;
$sql_login = "select emil from user";
$query_emil=mysqli_query($link,$sql_login);

$sql_login = "select pass from user";
$query_pass=mysqli_query($link,$sql_login);
while ($i<$add){
    $p= implode(mysqli_fetch_assoc($query_pass));
    $e= implode(mysqli_fetch_assoc($query_emil));
    if ($pass==$p and $e==$email){
        $id= $i;
        $id++;
        header('location: http://localhost/todo/views/hi.php?id='.$id);
    }
    $i++;
}
echo 'no add ' ;
mysqli_close($link);




















