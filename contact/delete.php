<?php
require_once '../php/sessionstart.php';

$id=isset($_GET['id']) ? $_GET['id'] : null;
if (isset($id) && isset($_SESSION['contact'][$id])){
    unset($_SESSION['contact'][$id]);
}else{
    $_SESSION['errors']=['مخاطب مورد نظر وجود ندارد '];
}

header('location:../index.php');