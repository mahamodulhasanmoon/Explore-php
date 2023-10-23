<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    echo "Registration successful!";
    echo "username: " . $username . " password: " . $password . "\n";
}
?>
