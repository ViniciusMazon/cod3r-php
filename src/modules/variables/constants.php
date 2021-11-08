<div class="title">Constantes</div>

<?php
define('TAX_RATE', 5.9); # por convenção uppercase
echo '<br/>' . TAX_RATE; # não precisa do '$' para invocar

const NEW_TAX_RATE = 2.5; # outra forma de declarar
echo '<br/>' . NEW_TAX_RATE;

$variableValue = 2.8;
define('VARIABLE_TAX_RATE', $variableValue);
echo '<br/>' . VARIABLE_TAX_RATE;

echo '<br/>' . PHP_VERSION;
echo '<br/>' . PHP_INT_MAX;
echo '<br/>' . __LINE__;
echo '<br/>' . __FILE__;
echo '<br/>' . __DIR__;