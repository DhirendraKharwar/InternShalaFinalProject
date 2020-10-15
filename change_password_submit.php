<?php

// This page updates the user password
require("common.php");


$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$email = MD5($email);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

if ($new_pass != $new_pass1) {
    header('location: change_password.php?error=Password miss-match');
} else {
    
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $email . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        $error = "<span class='red'>Paaword has been successfully changed.</span>";
        header('location: login.php?error=Password Updated');
    }
?>