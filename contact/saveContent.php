<?php
require_once '../php/sessionstart.php';


if (!isset($_SESSION['errors'])) {
    $_SESSION['errors'] = [];
}
$errors = [];
if (strlen($_POST['fname']) < 3) {
    $errors[] = 'طول نام کوتاه می باشد باید حداقل 5 کاراکتر باشد';
}
if (strlen($_POST['lname']) < 3) {
    $errors[] = 'طول نام خانوادگی کوتاه می باشد باید حداقل 5 کاراکتر باشد';
}
if (strlen($_POST['tell']) < 10) {
    $errors[] = 'شماره تلفن وارد شده صحیح نمی باشد';
} elseif (substr($_POST['tell'], 0, 2) != '09') {
    $errors[] = 'شماره تلفن وارد شده باید با 09 شروع شود';
} elseif (!is_numeric(substr($_POST['tell'], 2))) {
    $errors[] = 'شماره تلفن وارد شده باید به صورت عدد باشد';
}


if (isset($_POST)) {
    $data = [
        'name' => $_POST['fname'],
        'family' => $_POST['lname'],
        'tell' => $_POST['tell'],
        'info' => $_POST['info']
    ];
}

$id = $_POST['id'] != '' ? $_POST['id'] : null;

if (empty($errors)) {
    if (isset($id)) {
        $_SESSION['contact'][$id] = $data;
    } else {
        $_SESSION['contact'][] = $data;
    }
} else {
    $_SESSION['errors'] = $errors;
}
header('location:../index.php');


?>