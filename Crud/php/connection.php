
<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "student_form";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$conn = mysqli_connect($id, $first_name, $middle_name, $last_name, $birthday, $gender, $school, )

if (!$conn) {   
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successful!";
?>