<div class="title">Atribuições</div>

<?php

$number = 10;
echo '<br/>' . $number;
$number = $number - 1;
echo '<br/>' . $number;
$number--;
echo '<br/>' . $number;
$number++; # pós fixada
echo '<br/>' . $number;
++$number; # pré fixada
echo '<br/>' . $number;
--$number;
echo '<br/>' . $number;

$number *= 2;
echo '<br/>' . $number;

$number .= 4; //184
echo '<br/>' . $number;

# $defaultTmp = null;
$defaultTmp = 'DEFAULT';
$default = $defaultTmp ?? TRUE; # Seta um valor padrão caso a primeira condição n seja satisfeita
echo '<br/>' . $default;