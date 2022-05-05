<?php

$name = isset($_GET['name'])? $_GET['name'] : '';
$mail = isset($_GET['email'])? $_GET['email'] : '';
$age = isset($_GET['age'])? $_GET['age'] : '';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form method="GET">
        <label for="name"> Inserisci il tuo nome</label>
        <input type="text" name="name"><br>
        <label for="email">Inserisci la tua Email</label>
        <input type="email" name="email"><br>
        <label for="age">Inserisci la tua età</label>
        <input type="number" name="age"><br>
        <button type="submit"> Submit </button>
    </form>

    <?php
        if (strlen($name) > 3 && strpos($mail , '.') && strpos($mail , '@') && is_numeric($age)){
            echo "<p>Accesso Riuscito</p>";
        } else {
            echo "<p>Accesso negato</p>";
        }
    ?>

</body>
</html>