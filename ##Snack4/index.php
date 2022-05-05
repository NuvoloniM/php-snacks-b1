<?php



//creo funzione che crea numeri randomici fino ad un max dinumeri pescati
function rundomNumbers($min, $max, $arrayLength){
    $numberArray = [];
    //ciclo while per riempire l'array
    while (count($numberArray) < $arrayLength) {
        //rand è funzione php per creare numeri randomici tra min e max
        $number = rand($min, $max);
        //condizione --> se varibile numbers non è in array
        if (!in_array($number, $numberArray)) {
            //pusha number in array
            $numberArray[] = $number;
        }
    }

    return $numberArray;
}
//stampo l'array inserendo le variabili
var_dump(rundomNumbers(1,15,15));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
</body>
</html>