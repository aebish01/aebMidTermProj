<!-----add header---->
<?php include('header.html'); ?>
<!----- filter section---->
<section class="filters">
<select name="makeId">
    <option value="">Make</option>
    <?php foreach($makes as $make) : ?>
        <option value="<?= $make['ID'] ?>">
            <?= $make['Make'] ?>
        </option>
    <?php endforeach ?>
</select>
<br>
<select name="typeId">
    <option value="">Type</option>
    <?php foreach($types as $type) : ?>
        <option value="<?= $type['ID'] ?>">
            <?= $type['Type'] ?>
        </option>
    <?php endforeach ?>
</select>
<br>
<select name="" id="">
    <option value="">Class</option>
    <?php foreach($classes as $class) : ?>
        <option value="<?= $class['ID'] ?>">
            <?= $class['Class'] ?>
        </option>
    <?php endforeach ?>
</select>
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
        </div>
        <?php foreach($vehicles as $vehicle) : ?>
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
            </div>
        <?php endforeach ?>
    </div>
</section>