<?php
//includinge file for database connection
include 'connection.php';

//insert data

$name=trim(ucwords($_POST['name']));
$dob=trim($_POST['dob']);
$age=trim($_POST['age']);
$address=trim($_POST['address']);
$city=trim($_POST['city']);
$state=trim($_POST['state']);
$query = "INSERT INTO patient_details(name, dob, age, address, city, state) VALUES(\"$name\", \"$dob\", \"$age\",\"$address\", \"$city\", \"$state\")";
$sql=mysqli_query($conn,$query);
if($sql){
	echo 'inserted successfully';
}

