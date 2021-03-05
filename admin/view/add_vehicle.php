<?php include('header.php'); ?>

<h3 class="add_vehicle__header">Add Vehicle</h3>
<form action="." method="POST" class="add_vehicle__form">
    <input type="hidden" name="action" value="added_vehicle">
    <div class="add_vehicle__input">
        <label for="make__drop-down">Make:</label>
        <select id="make__drop-down" name="make_id" required>
            <option value="" selected>Select Make</option>
            <?php foreach($makes as $make) : ?>
                <option value=<?= $make['make_id']?>><?= $make['make'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="add_vehicle__input">
        <label for="type__drop-down">Type:</label>
        <select id="type__drop-down" name="type_id" required>
            <option value="" selected>Select Type</option>
            <?php foreach($types as $type) : ?>
                <option value=<?= $type['type_id']?>><?= $type['type'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="add_vehicle__input">
        <label for="class__drop-down">Class:</label>
        <select id="class__drop-down" name="class_id" required>
            <option value="" selected>Select Class</option>
            <?php foreach($classes as $class) : ?>
                <option value=<?= $class['class_id']?>><?= $class['class'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="add_vehicle__input">
        <label for="year">Year:</label>
        <input id="year" type="number" name="year" min="1900" max=<?= date("Y") ?> required>
    </div>
    <div class="add_vehicle__input">
        <label for="model">Model:</label>
        <input id="model" type="text" name="model" maxlength="20" size="20" required>
    </div>
    <div class="add_vehicle__input">
        <label for="price">Price:</label>
        <input id="price" type="number" name="price" min="0" max="99999" required>
    </div>
    <button class="btn btn-primary add_vehicle__button" type="submit">Add vehicle</button>
</form>

<h4>
    <?php if($action === 'added_vehicle') { ?>
        Vehicle added to database<br>
    <?php } ?>
    Current inventory: <?= $count[0] ?> vehicle<?php if($count[0] != 1) echo 's' ?>
</h4>

<div class="edit_vehicles_nav">
    <h3 class="edit_vehicles_nav__header">Edit/View vehicles</h3>
    <a class="edit_vehicles_nav__link" href=".?action=list_vehicles">View Full Vehicle List</a><br>
    <a class="edit_vehicles_nav__link" href=".?action=edit_makes">View/Edit Vehicle Makes</a><br>
    <a class="edit_vehicles_nav__link" href=".?action=edit_types">View/Edit Vehicle Types</a><br>
</div>

<?php include('../View/footer.php'); ?>