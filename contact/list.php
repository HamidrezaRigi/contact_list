<table class="table table-striped text-right mt-5 w-75 mx-auto" style="direction: rtl">
    <tr class="bg-dark text-white">
        <td>#</td>
        <td>نام</td>
        <td>نام خانوادگی</td>
        <td>تلفن</td>
        <td>توضیحات</td>
        <td>عملیات</td>
    </tr>
    <?php
    $contact = $_SESSION['contact'] ?? null;
    //    var_dump($contact);
    if (!empty($contact)) {
        foreach ($contact as $index => $item) {
            ?>
            <tr>
                <td><?= $index + 1 ?? 0 ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['family'] ?></td>
                <td><?= $item['tell'] ?></td>
                <td><?= $item['info'] ?></td>
                <td>
                    <a href="contact/edit.php?id=<?= $index ?>" class="btn  btn-info "
                       style="width: 50px;font-size: 13px ;padding: 5px;">ویرایش</a>
                    <a href="contact/delete.php?id=<?= $index ?>" class="btn btn-danger"
                       style="width: 50px;font-size: 13px ;padding: 5px;">حذف</a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>











