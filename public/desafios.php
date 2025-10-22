<?php

//Desafío 1: La Sucesión de Fibonacci
$a=0;
$b=1;
echo $a.'<br>';
echo $b.'<br>';
for ($i=0; $i<18; $i++){
    $prox=$a+$b;
    echo $prox.'<br>';
    $a=$b;
    $b=$prox;
}

//Desafío 2: Comprobador de Números Primos

