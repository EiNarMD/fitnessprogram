<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['signupUsername'];
    $password = $_POST['signupPassword'];

    // Here you would typically save this data in a database
    echo "Signup successful for username: " . $username;
}
?>
