<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Query the database to see if the username and password match
    $query = "SELECT * FROM contact WHERE Name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // If a match is found, log the user in
    if (mysqli_num_rows($result) > 0) {
        echo 'You have logged in successfully';
    } else {
        // If no match is found, display an error message
        echo '<p>Invalid email or password. Please try again.</p>';
    }
}
?>
