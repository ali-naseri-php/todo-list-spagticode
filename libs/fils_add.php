<?php
global $db;
include '../bootstrop/init.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $ali = 'ali';
    header("location: http://localhost/todo/index.php?ali=" . $ali);
    exit();
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

}
$title  = $_POST['titel'];
$link = mysqli_connect($db['hast'], $db['user-name'], $db['pass']);
mysqli_select_db($link, 'todo');
$sql=mysqli_prepare($link,"insert into mount(title,user_id)values (?,?)");
mysqli_stmt_bind_param($sql,'ss',$title ,$user_id );
mysqli_stmt_execute($sql);

header('location: http://localhost/todo/views/hi.php?id='.$user_id);



























