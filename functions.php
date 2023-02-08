<?php

//Genero la password in modo random 
function randomPassword()
{
    // Prendo il valore dell'input dell'utente 
    $password_length = $_GET['pass_length'] ?? '';
    $charachters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789-*/";
    $pass = '';

    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, strlen($charachters) - 1);
        $pass .= $charachters[$n];
    }
    return $pass;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>