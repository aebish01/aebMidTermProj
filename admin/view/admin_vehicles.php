<!-----add header---->
<?php include('admin_header.html'); ?>
<!----- filter section---->
<section class="filters">
    <!----Get info---->
    <form method="POST">
    <select name="makeId">
        <option value="">Make</option>
        <?php foreach($makes as $make) : ?>
            <option value="<?= $make['ID'] ?>" <?php if(isset($_POST['makeId']) && $_POST['makeId'] == $make['ID']) echo "selected" ?>>
                <?= $make['Make'] ?>
            </option>
        <?php endforeach ?>
    </select>
        <br>
        <select name="typeId">
            <option value="">Type</option>
            <?php foreach($types as $type) : ?>
                <option value="<?= $type['ID'] ?>" <?php if(isset($_GET['typeId']) && $_GET['typeId'] == $type['ID']) echo "selected" ?>>
                    <?= $type['Type'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <select name="classId">
            <option value="">Class</option>
            <?php foreach($classes as $class) : ?>
                <option value="<?= $class['ID'] ?>" <?php if(isset($_GET['classId']) && $_GET['classId'] == $class['ID']) echo "selected" ?>>
                    <?= $class['Class'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <div class="radios">
            <label>Price:</label>
            <input type="radio" name="filter" value="price">
            <label>Year:</label>
            <input type="radio" name="filter" value="year">
            <button type="submit">Filter</button>
            
        </div>
    </form>
</section>

<!-----display---->
<section class="displayRows">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bold">Year</p>
            </div>
            <div class="col">
                <p class="bold">Make</p>
            </div>
            <div class="col">
                <p class="bold">Model</p>
            </div>
            <div class="col">
                <p class="bold">Type</p>
            </div>
            <div class="col">
                <p class="bold">Class</p>
            </div>
            <div class="col">
                <p class="bold">Price</p>
            </div>
            <div class="col">
                <p class="bold">Delete</p>
            </div>
        </div>
        <?php 
            if(!empty($vehicles)) {
                foreach($vehicles as $vehicle) :
        ?>
            <div class="row">
                <div class="col">
                    <p><?php echo $vehicle['year'] ?></p>
                </div>
                <div class="col">
                    <?php $makeName = getMakeName($vehicle['make_id']) ?>
                    <p><?php echo $makeName ?></p>
                </div>
                <div class="col">
                    <p><?php echo $vehicle['model'] ?></p>
                </div>
                <div class="col">
                    <?php $typeName = getTypeName($vehicle['type_id']) ?>
                    <p><?php echo $typeName ?></p>
                </div>
                <div class="col">
                    <?php $className = getClassName($vehicle['class_id']) ?>
                    <p><?php echo $className ?></p>
                </div>
                <div class="col">
                    <p><?php echo $vehicle['price'] ?></p>
                </div>
                <div class="col">
                    <form action="." method="POST">
                    <input type="hidden" name="action" value="deleteVehicle">
                    <input type="hidden" name="vehIDnum" value="<?= $vehicle['vehicleID'] ?>">
                    <button class="dbutton">Delete</button>
                </div>
            </div>
        <?php endforeach ?>
        <?php } ?>
    </div>
</section>
<section class="links">
    <a href=".?action=addVehicle">Add Vehicles</a><br>
    <a href=".?action=displayMake">View/Edit Makes</a><br>
    <a href=".?action=displayType">View/Edit Types</a><br>
    <a href=".?action=displayClass">View/Edit Class</a>
    
</section>
<!---footer--->
<?php include('footer.html') ?>