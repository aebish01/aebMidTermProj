<?php include('admin_header.html')?> 
<?php
//require('/xampp/htdocs/aebMidTermProj/admin/model/adminMakes.php');
$makes = displayMakes();
?>

<section class="displayRows">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>name</p>
            </div>
        </div>
        <?php foreach($makes as $make) : ?>
            <div class="row">
                <div class="col">
                    <p><?php echo $make['Make'] ?></p>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</section>