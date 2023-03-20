<?php include('admin_header.html')?> 

<section class="displayRows">
    <div class="container-small">
        <div class="row">
            <div class="col">
                <p>name</p>
            </div>
        </div>
        <?php 
        if(!empty($classes)) {
            foreach($classes as $class) :
            ?>
            <div class="row">
                <div class="col">
                    <p><?php echo $class['Class'] ?></p>
                </div>
                <div class="col">
                    <form action="." method="POST">
                    <input type="hidden" name="action" value="deleteClass">
                    <input type="hidden" name="classIDNum" value="<?= $class['ID'] ?>">
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
            <input type="text" name="addClass" maxlength="20" placeholder="Class">
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