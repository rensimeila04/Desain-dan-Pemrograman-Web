<?php

$email = $_POST["email"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email yang diproses: " . $email;
} else {
    echo "Email tidak valid!";
}
?>
