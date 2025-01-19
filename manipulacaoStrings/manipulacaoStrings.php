<?php

echo "Digite uma frase :";
$frase = readline();

function contar_palavras($frase){
 echo "essa frase contém: " .  str_word_count($frase). " palavras" ;
}
contar_palavras($frase);

 echo "\n";

function maior_palavra($frase) {
    $palavras = preg_split('/\s+/', $frase); // Divide a frase em palavras
    $maior = "";
    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior)) {
            $maior = $palavra;
        }
    }
    return $maior;
}


$maior = maior_palavra($frase);
echo "A maior palavra é \"$maior\".\n";
/* 
Explicando a função maior_palavra($frase)
declaro $palavras = preg_split
preg split é uma função que divide strings com expressão regular(regex)
uso a expressão '/\s+/' para detectar sequencias de espaços em branco e usar como separador 
a frase "olá mundo" ficaria ["olá", "mundo"] apos a expressão.
declaro a variavel $maior com uma string vazia para armazenar a maior palavra posteriormente

inicializo um loop foreach, que irá percorrer cada palavra do array $palavras, com strlen descubro o comprimento da palavra atual a ser iterada e comparo com o que está armazenado em $maior, caso $palavra seja maior que $maior, $maior passa a ter o valor de $palavra

quando o loop terminar, tenho certeza que $maior recebeu a palavra de maior valor de minha frase, com isso dou return $maior para retornar a maior palavra da frase

A função maior_palavra é chamada e a palavra retornada é armazenada na variável $maior.

A palavra armazenada em $maior é inserida na string usando interpolação.
As aspas duplas ao redor de \$maior (\") servem para exibir as aspas como parte da mensagem.
*/

