<?php
    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    $errors = array();

    if(isset($_POST['addStudent']))
    {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $house = mysqli_real_escape_string($conn, $_POST['address']);
        $town = mysqli_real_escape_string($conn, $_POST['town']);
        $county = mysqli_real_escape_string($conn, $_POST['county']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($firstname)) {array_push($errors, "Please enter your first name");}
        if (empty($lastname)) {array_push($errors, "Please enter your last name");}
        if (empty($house)) {array_push($errors, "Please enter address line one");}
        if (empty($town)) {array_push($errors, "Please enter your town");}
        if (empty($county)) {array_push($errors, "Please enter county");}
        if (empty($country)) {array_push($errors, "Please enter a country");}
        if (empty($postcode)) {array_push($errors, "Please enter your postcode");}

        if(count($errors) == 0)
        {

            $query = "INSERT INTO student (password, dob, firstname, lastname, house, town,
            county, country, postcode) 
            VALUES ('$password', '$dob', '$firstname', '$lastname', '$house', 
            '$town', '$county', '$country', '$postcode')";

            if(mysqli_query($conn, $query))
            {
                echo "Record has been added successfully";
            } 
            else
            {
                echo "Error: Unfortunatelly action has been failed $query ." . mysqli_error($conn);
            }
        }

    }

    if (isset($_POST['addStudent'])) {
        // Image name
        $image = $_FILES['image'];
  
        // image file directory
        $target = "img/".basename($image);
  
        $sql = "INSERT INTO images (studentimage) VALUES ('$image')";
        // execute query
        mysqli_query($db, $sql);
  
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Upload image failed";
        }
    }