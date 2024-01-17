<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    // Here you would typically check against a database
    $validUsername = "user"; //  username
    $validPassword = "password"; // password

    if ($username === $validUsername && $password === $validPassword) {
        // Successful login
        echo "Login successful!";
        // Redirect to home.html or any other destination
        // header("Location: home.html");
        // exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
