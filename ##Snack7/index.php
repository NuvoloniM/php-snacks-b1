<?php
/*
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classeA = [
    [
        "nome" => "Matteo",
        'cognome' => 'Nuvoloni',
        'voti' => [5, 6, 8, 7],
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Rossi',
        'voti' => [9, 6, 3, 5],
    ],
    [
        'nome' => 'Francesco',
        'cognome' => 'Bianchi',
        'voti' => [8, 6, 6, 7],
    ],
    [
        'nome' => 'Giovanna',
        'cognome' => 'Viola',
        'voti' => [8, 9, 9, 7],
    ],
];

/*
Calcolo la media di una serie di numeri
@param array $nums array di valori numerici
*/
function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
  }

// for ($i=0; $i < count($classeA); $i++) { 
//     echo "<div>" . $classeA[$i]['nome'] . ' ' . $classeA[$i]['cognome'] . ' ' . $classeA[$i][calcolaMedia('voti')]; "</div>";
// };

foreach ($classeA as $key => $val) {
    echo "<div>" .$val['nome'] . ' ' . $val['cognome'] . ' ' . calcolaMedia($val['voti']) ."</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>
    
</body>
</html>
