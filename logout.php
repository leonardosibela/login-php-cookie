<?php
    unset($_COOKIE["loged_user"]);
    setcookie('loged_user', null, -1, '/');
    header("Location: index.php");
    die();
?>