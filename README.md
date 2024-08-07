# Lista de Dados

Nessa aula, aprendemos sobre uma estrutura de dados super importante chamada **array**, que nada mais é do que uma lista de informações.

Imagine que você quer guardar as idades de todos os seus amigos em uma única variável. Com um array, você consegue fazer isso!

Vimos que podemos criar um array de duas maneiras: usando a função `array()` ou simplesmente colocando os valores entre colchetes `[]`.

E para acessar cada item do array, usamos índices, que começam do zero. Por exemplo, para pegar o primeiro item do array, usamos o índice `0`.

# Uso de Arrays e Loop For

Nessa aula, aprendemos a usar o loop `for` para iterar sobre um array e exibir seus elementos. Vimos como usar o `count()` para determinar o tamanho do array e garantir que o loop percorra todos os elementos, mesmo que o tamanho do array mude.

Também aprendemos que podemos usar arrays para armazenar diferentes tipos de dados, como números, strings e até mesmo outros arrays.

# Aula sobre Arrays Associativos

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
