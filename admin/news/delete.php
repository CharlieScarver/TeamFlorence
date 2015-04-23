<?php

require_once '../includes/db_holder.php';
$con = dbHolder();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: http://localhost/TeamFlorence-master/admin/news/index.php");
}

deleteNews($con, $id);
deleteMap($con,$id);
header("Location: http://localhost/TeamFlorence-master/admin/news/index.php");
