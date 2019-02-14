<?php
if (!empty($_SESSION['errors'])) {


    $errors = $_SESSION['errors'];

    foreach ($errors as $item) {
        ?>
        <p class="alert alert-error text-right w-50 mx-auto"><?= $item ?></p>
        <?php
    }
}
unset($_SESSION['errors']);

?>

