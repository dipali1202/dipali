<?php
//including for database connection
include 'connection.php';

//selecting data from database
$query = "SELECT * FROM patient_details";


$result = mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($result);
if ($rowcount > 0) {
    //html code for output
    $opt = '<table class="table table-bordered">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Address</th>
            <th>city</th>
            <th>State</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    ';

   
    while ($row = mysqli_fetch_array($result)) {
        $opt .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['state']}</td>
                    <td><button type='button' class='btn btn-warning edit' id='" . $row['id'] . "'>Edit</button></td>
                    <td><button type='button' class='btn btn-danger delete' id='" . $row['id'] . "'>Delete</button></td>
                </tr>
                ";
    }
    $opt .= '</tbody>
        </table>';
    
    echo $opt;
}