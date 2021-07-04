<?php
//including database connection
include 'connection.php';

//query to delete data from database by id 
$query = "DELETE FROM patient_details WHERE id=" . $_POST['id'] . " LIMIT 1";

//execute query
if ($conn->query($query)) {
    echo "data Deleted";
} else {
    echo "Unable to Delete Data" . $conn->error;
}