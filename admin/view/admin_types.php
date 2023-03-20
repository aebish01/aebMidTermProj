<?php include('admin_header.html')?> 

<section class="displayRows">
    <div class="container-small">
        <div class="row">
            <div class="col">
                <p>name</p>
            </div>
        </div>
        <?php 
        if(!empty($types)) {
            foreach($types as $type) :
            ?>
            <div class="row">
                <div class="col">
                    <p><?php echo $type['Type'] ?></p>
                </div>
                <div class="col">
                    <form action="." method="POST">
                    <input type="hidden" name="action" value="deleteTypes">
                    <input type="hidden" name="typeIDNum" value="<?= $type['ID'] ?>">
                    <button class="dbutton">Delete</button>
                </div>
            </div>

        <?php endforeach; 
        }
        ?>

    </div>
</section>
<section class="add">
    <form action="." method="POST">
        <div class="addinput">
            <label>Name:</label><br>
            <input type="text" name="addTypes" maxlength="20" placeholder="Types">
        </div>
    </form>
</section>
<section class="links">
    <a href="http://localhost/aebMidTermProj/admin">View all Vehicles</a><br>
    <a href=".?action=addVehicle">Add Vehicles</a><br>
    <a href=".?action=displayMake">View/Edit Makes</a><br>
    <a href=".?action=displayType">View/Edit Types</a><br>
    <a href=".?action=displayClass">View/Edit Class</a>
</section>
<?php include('/xampp/htdocs/aebMidTermProj/admin/view/footer.html');