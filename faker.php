<?php
include("_includes/dbconnect.inc");

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('en_GB');

for($i = 0; $i < 10; $i++) {
    $query = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town,
    county, country, postcode)
    VALUES ('". $faker->randomNumber($nbDigits = 8, $strict = true)."', '".$faker->password."', '".$faker->date($format = 'Y-m-d', $max = 'now')."', '".$faker->firstName($gender = null|'male'|'female')."', 
    '".$faker->lastName."', '".$faker->streetAddress."', '".$faker->town."', '".$faker->county."', '".$faker->country."', '".$faker->postcode."' )";

    mysqli_query($conn, $query);
}

echo "Success";

?>