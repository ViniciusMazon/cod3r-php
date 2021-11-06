<div class="title">Ponto flutuante</div>

<?php
echo 1.1, '<br/>';

echo var_dump(1.1), '<br/>'; // tipo float
echo var_dump(1.0), '<br/>'; // ainda é interpretado como float 

echo PHP_FLOAT_MAX, '<br/>'; //Valor máximo suportado pela máquina
echo PHP_FLOAT_MIN, '<br/>'; //Valor minimo suportado pela máquina

echo 1.2e3, '<br/>'; //1.2 X 10^3 (1200)
echo 13e-3, '<br/>'; //13 X 10^-3 (0.013)

