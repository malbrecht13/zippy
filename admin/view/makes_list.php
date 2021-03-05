<?php include('header.php'); ?>

<h3 class="add_vehicle__header">Edit Vehicle Makes</h3>
<div class="edit_vehicle__form">
    <table class="text-center table-bordered">
        <thead>
            <tr>
                <th>Make</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($makes as $make) : ?>
            <tr>
                <td><?= $make['make'] ?></td>
                <td class="edit_vehicle_table__td">
                <form action="." method="POST">
                    <input type="hidden" name="action" value="delete_make">
                    <input type="hidden" name="make_id" value=<?= $make['make_id'] ?>>
                    <button class="btn btn-danger" type="submit">Remove</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include('../View/footer.php'); ?>