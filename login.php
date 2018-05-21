<?php

$user = $_POST["user"];
$password = $_POST["password"];

if ($user != "fatec" || $password != "admin") {
    header("Location: index.php?loginerror=true");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Fatec</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
        
    <div class="alert alert-success">
        <strong>Sucesso!</strong> usuário <?= $user ?> logado!
    </div>

</body>
</html>