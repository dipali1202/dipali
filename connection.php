<?php
$conn=mysqli_connect('localhost','root','','patient_info') or die('unable to connect');
if ($conn->connect_error) {
    die("Connection Failed");
}