<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if ($username === "hackme@tutorial.com" && $password === "SeCuRePaSsWoRd") {
     $_SESSION['loggedin'] = true;
     $_SESSION['username'] = $username;

     header("Location: success.php");
     exit();
} else {

    header("Location: error.html");
    exit();
}
?>






