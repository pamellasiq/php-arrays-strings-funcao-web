<?php

//array - uma sequencia de informações normalmente do mesmo tipo
$idadeList = [21, 23, 19, 25, 20, 41, 18];
$alunos = ['João', 'Maria', 'Pedro', 'Ana'];

//conta quantos intens tem no meu array
//echo count($idadeList);

//"i" é um contador da interação, que recebe 0, pois é o início do array e vai ate o fim
//incrementa até 7
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i]. PHP_EOL; //PHP_EOL exibe quebrando a linha
}

for($i = 0; $i < count($alunos); $i++) {
    echo 'Aluno: '. $alunos[$i]. PHP_EOL;
}