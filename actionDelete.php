<?php
    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    $rowCount = count($_POST["studentid"]);
    for($i=0;$i<$rowCount;$i++) 
    {
    mysqli_query($conn, "DELETE FROM student WHERE studentid='" . $_POST["studentid"][$i] . "'");
    }

      header("Location:students.php");
?>