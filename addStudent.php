<!DOCTYPE html>
<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");
echo template("templates/partials/nav.php");
?>

<div class="container">
    <div class="row row-form justify-content-center">
        <form class="border rounded" action="addStudentDetails.php" method="post">
            <div class="row">
                <div class="form-group col">
                    <label for="firstname">First Name :</label>
                    <input type="text" class="form-control" name="firstname" placeholder="e.g Barry">
                </div>

                <div class="form-group col">
                    <label for="lastname">Last Name :</label>
                    <input type="text" class="form-control" name="lastname" placeholder="e.g Owen">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" class="form-control" name="house" placeholder="e.g 88 Palmer Inlet">
            </div>

            <div class="row">
                <div class="form-group col">
                    <label for="town">Town :</label>
                    <input type="text" class="form-control" name="town" placeholder="e.g Suzzaneborough">
                </div>

                <div class="form-group col">
                    <label for="county">County :</label>
                    <input type="text" class="form-control" name="county" placeholder="e.g Somerset">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="country">Country :</label>
                    <input type="text" class="form-control" name="country" placeholder="e.g Denmark">
                </div>

                <div class="form-group col-md-6">
                    <label for="postcode">Postcode :</label>
                    <input type="text" class="form-control" name="postcode" placeholder="e.g TN14 5GD">
                </div>
            </div>
            <div class=form-group>
                <label for="dob">Date of Birth :</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="e.g 08-05-1980">
            </div>

            <div class="form-group">
                <label for="inputPassword">Password :</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label class="form-label" for="customFile">Upload student photo :</label>
                <input type="file" name="studentImage" class="form-control" accept="image/jpg" />
            </div>

            <button type="submit" class="btn btn-primary" name="addStudent">Submit</button>
        </form>
    </div>
</div>
<?php
echo template("templates/partials/footer.php");
?>