<?php include('admin_header.html') ?>

<section class="addVehicle">
    <form action="." method="POST">
        <label>Make:</label><br>
        <select name="makeID" required>
            <option value="">Please choose Make</option>
            <?php foreach ($makes as $make) : ?>
                <option value="<?= $make['ID'] ?>">
                    <?= $make['Make'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label>Type:</label><br>
        <select name="typeID" required>
            <option value="">Please choose Type</option>
            <?php foreach ($types as $type) : ?>
                <option value="<?= $type['ID'] ?>">
                    <?= $type['Type'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label>Class:</label><br>
        <select name="classID" required>
            <option value="">Please choose Class</option>
            <?php foreach ($classes as $class) : ?>
                <option value="<?= $class['ID'] ?>">
                    <?= $class['Class'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <label>Year:</label><br>
        <input type="text" name="year" maxlength="4" placeholder="YEAR" required>
        <br>
        <label>Model:</label><br>
        <input type="text" name="model" maxlength="20" placeholder="Model" required>
        <br>
        <label>Price:</label><br>
        <input type="text" name="price" maxlength="11" placeholder="Price" required>
        <br>
        <br>
        <button>Add Vehicle</button>
    </form>
</section>

<section class="links">
    <a href="http://localhost/aebMidTermProj/admin">View all Vehicles</a><br>
    <a href=".?action=addVehicle">Add Vehicles</a><br>
    <a href=".?action=displayMake">View/Edit Makes</a><br>
    <a href=".?action=displayType">View/Edit Types</a><br>
    <a href=".?action=displayClass">View/Edit Class</a>
</section>

<?php include('footer.html') ?>