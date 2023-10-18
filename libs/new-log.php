<?php

global $db;
include '../bootstrop/init.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $ali='ali';
    header("location: http://localhost/todo/index.php?ali=".$ali);
    exit();
}
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
//$link = mysqli_connect();
$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);
mysqli_select_db($link, 'todo');
//$sql ="insert into user(user,emil,pass)values ('{$name}','{$email}','{$pass}')";
//mysqli_query($link,$sql);
$sql=mysqli_prepare($link,"insert into user(user,emil,pass)values (?,?,?)");
mysqli_stmt_bind_param($sql,'sss',$name,$email,$pass);
mysqli_stmt_execute($sql);





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
        mysqli_close($link);
        header('location: http://localhost/todo/views/hi.php?id='.$id);
    }
    $i++;
}

mysqli_close($link);
















