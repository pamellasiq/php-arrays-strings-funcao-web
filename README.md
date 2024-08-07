# Estudos PHP:

1. Lista de Dados
2. Uso de Arrays e Loop For
3. Aula sobre Arrays Associativos
4. Tipos de Chave
5. Subrotinas
6. Valor vs Referência
7. Servidores Web
8. PHP com HTML

## Lista de Dados

Nessa aula, aprendemos sobre uma estrutura de dados super importante chamada **array**, que nada mais é do que uma lista de informações.

Imagine que você quer guardar as idades de todos os seus amigos em uma única variável. Com um array, você consegue fazer isso!

Vimos que podemos criar um array de duas maneiras: usando a função `array()` ou simplesmente colocando os valores entre colchetes `[]`.

E para acessar cada item do array, usamos índices, que começam do zero. Por exemplo, para pegar o primeiro item do array, usamos o índice `0`.

## Uso de Arrays e Loop For

Nessa aula, aprendemos a usar o loop `for` para iterar sobre um array e exibir seus elementos. Vimos como usar o `count()` para determinar o tamanho do array e garantir que o loop percorra todos os elementos, mesmo que o tamanho do array mude.

Também aprendemos que podemos usar arrays para armazenar diferentes tipos de dados, como números, strings e até mesmo outros arrays.

## Aula sobre Arrays Associativos

Nessa aula, aprendemos sobre arrays associativos, que são como mapas onde podemos associar um nome/índice a um valor. Esses índices podem ser numéricos ou strings, como "titular" ou "saldo".

Criamos um exemplo com contas correntes, onde cada conta possui um titular e um saldo. Para acessar os valores dentro de um array associativo, usamos colchetes com o nome do índice, por exemplo: `$conta1['titular']`.

Também aprendemos a iterar por um array de contas usando um loop `for` e a exibir o titular de cada conta.

## Tipos de Chave

Nela, a gente aprendeu que o PHP só aceita chaves de arrays associativos como **inteiros** ou **strings**. Se você tentar usar outros tipos de dados, como float ou booleano, eles serão convertidos para inteiro ou string.

Por exemplo, se você usar a chave `'1'` (string) e `1` (inteiro), o PHP vai considerar apenas a chave `1` (inteiro), pois ele tenta converter a string para inteiro.

É importante lembrar que essa conversão pode gerar resultados inesperados, como sobrescrever valores anteriores.

Para evitar problemas, o ideal é manter uma consistência nos tipos de dados das chaves do seu array. Se você usar strings, use sempre strings. Se usar inteiros, use sempre inteiros.

Lembre-se: a chave do array associativo deve ter um significado, e usar tipos de dados diferentes pode comprometer essa lógica.

Nessa aula, aprendemos como criar uma estrutura de dados mais complexa usando e combinando arrays associativos. Vimos e aprendemos que:

um array associativo sempre define elementos composto por uma chave e um valor
a associação entre chave e valor é feito com =>
a chave funciona como um índice explicito (definido por nós)
o valor pode ser um valor primitivo ou outro array
a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
um array associativo também é chamado de mapa ou dicionário
podemos combinar um array simples e array associativo para definir estruturas mais complexas
o laço foreach oferece uma forma mais expressiva de iteração
no foreach podemos acessar o índice e o valor do elemento da iteração
arrays podem crescer e podemos adicionar novos elementos
em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)
nesse caso o PHP automaticamente incrementa o índice

## Subrotinas

Nessa aula, aprendemos a criar funções no PHP, que são como blocos de código reutilizáveis que podem ser chamados em diferentes partes do nosso programa.

Criamos uma função chamada `exibeMensagem()` que recebe uma mensagem como parâmetro e a exibe na tela, junto com uma quebra de linha.

Vimos como podemos chamar essa função em diferentes pontos do nosso código, evitando a repetição de código e tornando nosso programa mais organizado e eficiente.

No próximo vídeo, vamos aprender a criar uma função para realizar o saque, isolando essa funcionalidade em um bloco de código reutilizável.

## Valor vs Referência

Nessa aula, aprendemos sobre a diferença entre passar variáveis por valor e por referência em PHP.

Quando passamos uma variável por valor, estamos criando uma cópia da variável dentro da função. Isso significa que qualquer alteração feita na cópia dentro da função não afetará a variável original.

Já a passagem por referência nos permite modificar a variável original diretamente dentro da função. Para isso, usamos o símbolo `&` antes do nome da variável na definição da função.

A passagem por referência pode ser útil em algumas situações, mas é importante ter cuidado, pois podemos acabar modificando a variável original de forma inesperada.

No final da aula, vimos que o PHP oferece algumas facilidades para trabalhar com listas, como a possibilidade de pegar apenas os primeiros itens de uma lista e atribuí-los a variáveis.

## Servidores Web

Primeiro, vimos que para um site funcionar, precisamos de um servidor. ️No passado, era preciso instalar programas como o XAMPP para isso, mas hoje o PHP já tem um servidor web integrado!

Para usar esse servidor, basta executar um comando no terminal, como `php -S localhost:8000`. Depois, podemos acessar nosso site no navegador, digitando o endereço http://localhost:8000.

O PHP busca um arquivo chamado `index` (como `index.html` ou `index.php`) para exibir na página. Se não encontrar, ele mostra um erro "404 Not Found".

No exemplo da aula, acessamos `localhost:8080/banco.php` e vimos os dados do banco de dados no navegador.

É importante entender como o PHP funciona em uma requisição web, pois isso é fundamental para desenvolvermos sites e aplicações web.

## PHP com HTML

Nessa aula, aprendemos como integrar o PHP com o HTML para criar páginas web dinâmicas. Vimos como usar o `echo` para exibir conteúdo PHP dentro do HTML, e como usar a tag `<?php ?>` para alternar entre código PHP e HTML.

Também aprendemos a usar o método `list()` para simplificar a atribuição de valores de um array a variáveis.

Por fim, exploramos a estrutura básica de um arquivo HTML e como inserir código PHP dentro dele, utilizando o `foreach` para iterar sobre um array de contas correntes e exibir seus dados.
