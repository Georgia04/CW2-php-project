<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");
echo template("templates/partials/nav.php");

$sql = "SELECT studentid, dob, firstname, lastname, house, town,
    county, country, postcode FROM student";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
    <form class="border border-dark rounded" method="post" action="deleteButton.php" onsubmit="return deleteConfirm();">
        <table class="table table-striped">
            <tr>
                <th><input type="checkbox" name="checkAll" id="checkAll"> Select All </th>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Town</th>
                <th>County</th>
                <th>Country</th>
                <th>Postcode</th>
            </tr>

            <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>
               <td><input type='checkbox' name='studentid[]' class='checkbox' value='{$row['studentid']}'  />
                <td>{$row['studentid']}</td>
                <td> {$row['firstname']}</td>
                <td>{$row['lastname']}</td>
                <td> {$row['dob']}</td>
                <td>{$row['house']}</td> 
                <td>{$row['town']}</td>
                <td>{$row['county']}</td>
                <td>{$row['country']}</td>
                <td>{$row['postcode']}</td>
         </tr>";
            }
            $i++;
            ?>

        </table>
        <p class="text-center"><button type='submit' class='btn btn-warning btn-lg btn-block' name='checkbox_delete'> Delete </button></p>
    </form>
</div>
<script type="text/javascript">
    function deleteConfirm() {
        var result = confirm("Are you sure you want to delete records?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
    $(document).ready(function() {
        $('#check_all').on('click', function() {
            if (this.checked) {
                $('.checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function() {
                    this.checked = false;
                });
            }
        });

        $('.checkbox').on('click', function() {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#check_all').prop('checked', true);
            } else {
                $('#check_all').prop('checked', false);
            }
        });
    });
</script>
<?php

echo template("templates/partials/footer.php")
?>