<?php
include 'connection.php';

if(isset($_POST['submit'])){
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $school = $_POST['school'];
    $address = $_POST['address'];

    // Insert the data into the database
    $sql = "INSERT INTO students_info (first_name, last_name, birthday, gender, school, address) 
    VALUES ('$first_name', '$last_name', '$birthday', '$gender', '$school', '$address')";


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="post" action="connection.php">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name" id="first_name"><br>

    <label for="last_name">Last name:</label>
    <input type="text" name="last_name" id="last_name"><br>

    <label for="birthday">Birthday:</label>
    <input type="date" name="birthday" id="birthday"><br>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br>

    <label for="school">School:</label>
    <input type="text" name="school" id="school"><br>

    <label for="address">Address:</label>
    <textarea name="address" id="address"></textarea><br>

    <input type="submit" name="Submit" value="Submit">
</form>
