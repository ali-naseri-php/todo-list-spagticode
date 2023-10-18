<?php
if (isset($_GET['ali'])){
    $ali=$_GET['ali'];
    echo 'ali';
}else {
    header('location: http://localhost/todo/views/login.php');
}

