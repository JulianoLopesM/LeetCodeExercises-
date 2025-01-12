<?php
$vogais = [
    "a",
    "e",
    "i",
    "o",
    "u"
];
echo "digite uma frase: ";
$frase = readline();
$fraseMinuscula = strtolower($frase);
$Contador = 0;

for ($i = 0; $i < strlen($fraseMinuscula); $i++){
    if(in_array($fraseMinuscula[$i], $vogais)){
        $Contador++;
    }
}

if($Contador > 0){
    echo "Numero total de vogais: $Contador. \n";
}else{
    echo "Sem vogais";
}

/*
Explicando o trecho for 
Inicio a variavel i para ser iterada enquanto ela for menor que o tamanho de minha frase

Depois a posição dela é usada no meu concidional if para vagar pelos caracteres da frase, e caso ela encontre uma vogal armazenada dentro do array, o contador do array irá subir +1

a função in_array funciona de uma maneira parecida com o strpos, ele checa se um valor existe em um array, ele procura por needle (agulha) no haystack (palheiro) usando comparação frouxa a não ser que strict seja definido.
*/
