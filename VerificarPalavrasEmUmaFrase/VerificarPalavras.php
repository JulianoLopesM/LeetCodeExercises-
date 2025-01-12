<?php

$palavrasChave = [
    "cartão",
    "compras",
    "mercado"
];
echo "Digite uma frase: ";
$frase = readline();

$palavrasEncontradas = [];

foreach($palavrasChave as $palavra){
    if (strpos($frase, $palavra) !== false){
        $palavrasEncontradas[] = $palavra;
    }
}
   if(!empty($palavrasEncontradas)){
    echo "Foram encontradas as palavras: " . implode(", ", $palavrasEncontradas) . "\n";
   }else{
    echo "Não foi encontrada nenhuma palavra. \n";
   }

/*
 Explicando o trecho foreach  

 foreach($palavrasChave as $palavra): 
 O foreach percorre o array $palavrasChave, atribuindo cada valor a variável $palavra em cada iteração.

 if(strpos($frase, $palavra) !== false): 
 Nesse trecho, a função strpos verifica se a palavra atual em $palavra aparece dentro da string $frase. 

 Como funciona o strpos:
 - Ele recebe dois parâmetros: o **haystack** (a "fonte de pesquisa") e o **needle** (o que estamos procurando).
 - No exemplo, $frase é o haystack (a string onde pesquisamos) e $palavra é o needle (a palavra que estamos procurando).
 - Se a palavra em $chave for encontrada, strpos retorna a **posição do primeiro caractere da palavra na frase**.
 - Se a palavra **não for encontrada**, strpos retorna `false`.

 Se strpos encontrar a palavra (ou seja, retornar algo diferente de `false`), a palavra encontrada é adicionada ao array $chavesEncontradas.

 Por que `!== false`?
 - Caso a palavra esteja na posição inicial (índice 0) da frase, strpos retorna `0`.
 - O PHP pode confundir `0` (posição válida) com `false` (não encontrado) se usarmos apenas `!= false`.
 - Por isso usamos `!== false`, que garante que **apenas o tipo booleano `false`** seja tratado como "não encontrado".

 A função empty() verifica se a variável está vazia ou não.
O ! é usado para inverter o resultado, ou seja, para verificar se não está vazia.
No seu código, isso garante que o PHP só execute o bloco if quando houver palavras-chave encontradas no array $chavesEncontradas.
*/
