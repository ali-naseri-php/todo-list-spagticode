<?php
include "../configs/information_db.php";
$id = $_GET['ali'];
$user= $_GET['id'];

$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);

mysqli_select_db($link,'todo');

$sql="select status from mount where id=$id";
$a=mysqli_query($link,$sql);
$a= implode(mysqli_fetch_assoc($a)); ;
if ($a==0){
    $sql = "update mount set status=1 where  id=$id";


}
else{    $sql = "update mount set status=0 where  id=$id";


}


mysqli_query($link,$sql);




header('location: http://localhost/todo/views/hi.php?id='.$user);