<?php

$user = $_POST["user"];
$password = $_POST["password"];

if ($user != "etec" || $password != "admin") {
    header("Location: index.php?loginerror=true");
    die();
} else {
    setcookie("loged_user", $user, time() + 60 * 60 * 4);
    header("Location: home.php");
    die();
}
?>