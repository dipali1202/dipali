<?php

//including db.php file for database connection
include 'connection.php';
extract($_POST);

//update data into database
$q = "UPDATE patient_details SET name='$name', dob='$dob', age='$age',address='$address', city='$city', state='$state' WHERE id=" . $id;

//execute query
if ($conn->query($q)) {
    echo "Data Updated";
} else {
    echo "Unable to Update Data";
}