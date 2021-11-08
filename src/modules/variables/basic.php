<div class="title">Variáveis</div>

<?php
$numberA = 13;

echo $numberA, '<br/>';

$numberB;
$numberB = 3;
$sum = $numberA + $numberB;
echo $sum, '<br/>';

echo isset($sum), '<br/>'; # verifica se uma variável está atribuida
unset($sum); # remove o valor atribuído
echo var_dump($sum), '<br/>';

// Nomes válidos
$var;
$var2;
$_var_3;
$VAR4;