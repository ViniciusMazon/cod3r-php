<div class="title">String</div>

<?php
echo 'Eu sou uma string', '<br/>';

echo var_dump("Eu também"), '<br/>'; # O encoding UTF-8 altera o tamanho da string
echo var_dump("Eu tambem"), '<br/>';

// Concatenação
echo 'conca' . 'tenado', '<br/>';
echo 'não está conca', 'tenado', '<br/>'; # Não serve para concatenação
echo "Posso inserir uma 'string' aqui dentro", '<br/>';
echo 'Posso inserir uma "string" aqui dentro', '<br/>';

print 'Eu também consigo imprimir na tela <br/>';
print 'Eu também consigo conca' . 'tenar assim <br />';

// Algumas funcões
echo strtoupper('vai ficar tudo uppercase'), '<br/>';
echo strtolower('Vai Ficar tudo Lowercase'), '<br/>';
echo ucfirst('só a primeira maiusculas'), '<br/>';
echo ucwords('todas palavras maiusculas'), '<br/>';

echo strlen('Qual o tamanho?'), '<br/>';
echo strlen('Eu também'), '<br/>';
echo mb_strlen('Eu também'), '<br/>'; # resolve o problema do encoding
echo mb_strlen('Eu também', 'utf-8'), '<br/>'; # Posso inclusive passar o encoding

echo substr('Só uma parte mesmo', 7, 6), '<br/>'; # Imprime apenas uma parte da string
# 7 é o inicio inclusive e 6 é o final exclusivo
echo substr('Só uma parte mesmo', 7), '<br/>';

echo str_replace('isso', 'aquilo', 'Trocar isso'), '<br/>'; # troca uma palavra por outra
echo str_replace('isso', 'aquilo', 'Trocar isso e isso'), '<br/>';