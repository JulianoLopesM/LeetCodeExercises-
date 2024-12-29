<?php
class Palindrome {

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x) {
        if($x < 0) return false;
        $reversed = 0;
        $original = $x;

        while($x != 0){
            $reversed = $reversed * 10 + $x % 10;
            $x = intval($x/10);
        }
        return $original === $reversed;

}

}
$palindrome = new Palindrome();
$result = $palindrome->isPalindrome(121);
var_dump($result);

/*Como funciona? Um Palindromo não pode ser negativo, então iniciamos nosso algoritmo com um if que verifica se nossa variavel x é negativa, caso for, irá retornar falso.
Criamos a varivel que vai guardar o número reverso, criamos também a variavel original que receberá o valor de x, e irá se comparar com reverso no final.

Explicação de como inverter esse número
Sendo x = 121 e reversed como padrão, começando com 0.
Enquanto x for diferente de 0, o loop for com as seguintes contas matemáticas irá iterar
$x = intval($x/10) com essa linha, garanto que depois da conta no reversed, irei arrancar o ultimo digito que ja foi movido para reversed.

Iteração 1
$reversed = 0 * 10 + 121 % 10;
$reversed = 0 + 1(resto da divisão de 121/10)
$reversed = 1
$x = 121/10 
$x = 12(Como estamos tratando de inteiros, o resultado de 121/10 é 12.)

Iteração 2
$reversed = 1 * 10 + 12 % 10
$reversed = 10 + 2
$reversed = 12
$x = 12/10
$x = 1

Iteração 3
$reversed = 12 * 10 + 1 % 10
$reversed = 120 + 1
$reversed = 121
$x = 1/10
$x = 0

Fim da iteração
$original === $reversed
121 === 121
return = true.
*/