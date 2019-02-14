<?php
$id = $_GET['id'] ?? null;
$contact = isset($_SESSION['contact'][$id]) ? $_SESSION['contact'][$id] : null;

?>

<fieldset class="p-3 border text-right mx-auto" style="direction: rtl; width: 500px">

    <legend style="width: 120px;font-size: 16px; margin-right: 5px;"> اطلاعات مخاطب</legend>
    <form action="contact/saveContent.php" method="post" class="form-inline w-100 text-right">

        <input type="hidden" class="txt" name="id"
               value="<?= $id ?? null ?>">

        <input type="text" class="txt" name="fname" placeholder="نام ..." required minlength="4"
               value="<?= $contact['name'] ?>">

        <input type="text" class="txt" name="lname" placeholder="نام خانوادگی..." required minlength="4"
               value="<?= $contact['family'] ?>">

        <input type="text" class="txt" name="tell" placeholder="تلفن..." required minlength="11" maxlength="11"
               value="<?= $contact['tell'] ?>">

        <input type="text" class="txt" name="info" placeholder="توضیحات..." required
               value="<?= $contact['info'] ?>">

        <button class="btn btn-info mt-5">send</button>

    </form>

</fieldset>