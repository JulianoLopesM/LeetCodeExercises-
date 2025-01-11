<?php

$array = [
    10,
    11,
    12,
    13,
    14
];
$soma = 0;
foreach($array as $value) {
    $soma += $value;
}
echo "A soma dos números é: $soma \n";

/*
Forma alternativa a questao, sem usar foreach

<?php

$array = [
10,
11,
12,
13,
14

echo "a soma dos numeros é: " . array_sum($sarray) , "/n"
*/