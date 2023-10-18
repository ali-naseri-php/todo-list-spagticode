<?php
include '../configs/id_db_max_form_foldei.php';
global $id_max_mount;
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    echo $user_id;
}
echo $id_max_mount;
echo '<hr>.todo list'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../assets/css/stily_todo.css">
</head>
<body>
<div class="row d-flex justify-content-center container">
    <div id='div_body' class="col-md-8">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                            Class="fa fa-tasks"></i>&nbsp;<h1>Task Lists</h1></div>

            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps—active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
                                <?php
                                $i = 0;
                                $sql_login = "select title from mount";
                                $query_tiitle = mysqli_query($link, $sql_login);

                                $sql_login = "select user_id from mount";
                                $query_user_id = mysqli_query($link, $sql_login);

                                $sql_login = "select id from mount";
                                $query_id = mysqli_query($link, $sql_login);

                                $sql_login = "select status from mount";
                                $query_status = mysqli_query($link, $sql_login);
                                $sql_login = "select time from mount";
                                $query_time = mysqli_query($link, $sql_login);

                                while ($i < $id_max_mount){

                                $d = implode(mysqli_fetch_assoc($query_id));
                                $id_user = implode(mysqli_fetch_assoc($query_user_id));
                                $t = implode(mysqli_fetch_assoc($query_tiitle));
                                $s = implode(mysqli_fetch_assoc($query_status));
                                $p = implode(mysqli_fetch_assoc($query_time));
                                $i++;
                                if ($user_id == $id_user){

                                ?>
                                <li class="list-group-item">
                                    <form action="<?php echo '../libs/fils_todo_titil.php?ali=' . $d.'&&id='.$user_id ; ?> "
                                          method="post">
                                        <div class="todo-indicator bg-warning"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">

                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control">

                                                    </div>


                                                </div>

                                                <div class="widget-content-left"><?php if ($s != 0) {
                                                        echo " <button  style='background-color: #39b131;  ' > </button>";
                                                    } ?>

                                                    <div class="widget-heading">
                                                        <div class="badge badge-danger ml-2"></div>

                                                        <span>
                                                         <input name="tit" type="checkbox"><label
                                                                    class="custom-control-label"
                                                                    For="exampleCustomCheckbox12">&nbsp;</label> </span><span
                                                                style="font-size: 25px; margin-left: 2em"><?php echo $t ?></span>


                                                        <div class="widget-subheading"><span
                                                                    style=" margin-left: 8em;"> <?php echo $p ?></span>
                                                            <input style=" background-color: #3ac47d;color: white ;margin-left: 58em;"
                                                                   class="fa fa-check" type="submit">
                                                            <button class="border-0 btn-transition btn btn-outline-success"
                                                                    style="background-color: #da0c32">
                                                                <a class="fa fa-trash" id="a_tg"
                                                                   href="<?php echo '../libs/delet_todo.php?ali=' . $d.'&&id='.$user_id ; ?> " style="color: white">delet</a>
                                                            </button>
                                                        </div>

                                                        <div class="widget-content-right">


                                    </form>

                        </div>
                        </button>
                    </div>
            </div>
        </div><?php }
        } ?>
        </li>

        </ul>
    </div>

</div>
</perfect-scrollbar>
</div>
<form action=<?PHP echo '../libs/fils_add.php?user_id=' . $user_id ?> method="post">
    <div class="d-block text-right card-footer" id='div'><i class="add_todo_i"
                                                            style="color: #6200EAFF;margin-left: 14px"> add todo</i>
        <input style="color: white; background-color: #6200EAFF; " class="in" type="text" name="titel">
        <button
                id='but' Class="btn btn-primary"><input type="submit"></button>
    </div>
    </div></form>
</div>
</div>
<?php

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
</body>
</html>