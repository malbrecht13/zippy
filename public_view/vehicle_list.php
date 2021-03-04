<?php include('header.php'); ?>

<select class="auto_selector">
    <option value="">View All Makes</option>
</select>
<select class="auto_selector">
    <option value="">View All Types</option>
</select>
<select class="auto_selector">
    <option value="">View All Classes</option>
</select>
<div class="container-fluid sortBy">
    <p class="sortBy__label">Sort by</label>
    <form action="." method="POST" class="sortBy__form">
        <input class="sortBy__form_radio" type="radio" name="sort" id="sort_by_price">
        <label for="sort_by_price">Price</label>
        <input class="sortBy__form_radio" type="radio" name="sort" id="sort_by_year">
        <label for="sort_by_year">Year</label>
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
<table>
    <thead>
        <tr>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
            <th>Type</th>
            <th>Class</th>
            <th>Price</th>
        </tr>
        <?php foreach($vehicles as $vehicle) : ?>
            <tr>
                <td><?= $vehicle['year'] ?></td>
                <td><?= $vehicle['make'] ?></td>
                <td><?= $vehicle['model'] ?></td>
                <td><?= $vehicle['type'] ?></td>
                <td><?= $vehicle['class'] ?></td>
                <td><?= $vehicle['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </thead>

</table>


<?php include('footer.php'); ?>