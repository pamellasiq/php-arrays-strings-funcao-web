<?php

//array - uma sequencia de informações normalmente do mesmo tipo
$idadeList = [21, 23, 19, 25, 20, 41, 18];
//para manipular um dado do array, basta informar o seu índice

//se o indice não for informado, o dado é adicionado no último índice informado
$idadeList[] = 20;

//exibir o dado com base no índice informado
foreach ($idadeList as $idade) {
    echo $idade.PHP_EOL;
}