<?php

require_once 'calculadora.php';
 $objeto = new calculadora();

function teste($nome, $resultado, $esperado) {
    if ($resultado === $esperado) {
        echo "$nome ";
        echo "Resultado: $resultado ";
        echo "Esperado: $esperado ";
        echo "Teste $nome Aprovado!<br>";
    
    } 
    else {
        echo "$nome ";
        echo "Resultado: $resultado ";
        echo "Esperado: $esperado ";
        echo "Teste $nome Falhou!<br>";
    }

}
echo "<h1>Testes da Calculadora</h1>";

teste('Adição', $objeto->somar(2,3), 5);
teste('Adição', $objeto->somar(10,20), 30);
teste('Adição', $objeto->somar(-5,5), 0);
echo "<hr>";
teste('Subtração', $objeto->subtrair(10,5), 5);
teste('Subtração', $objeto->subtrair(20,30), -10);
teste('Subtração', $objeto->subtrair(0,0), 0);
echo "<hr>";
teste('Multiplicação', $objeto->multiplicar(4,5), 20);
teste('Multiplicação', $objeto->multiplicar(0,10), 0);
teste('Multiplicação', $objeto->multiplicar(-2,3), -6);
echo "<hr>";
teste('Divisão', $objeto->dividir(20,4), 5);
teste('Divisão', $objeto->dividir(15,3), 5);
teste('Divisão', $objeto->dividir(10,2), 5);
?>