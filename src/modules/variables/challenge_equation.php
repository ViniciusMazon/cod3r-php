<div class="title">Desafio Equação</div>

<?php

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$supA = $numA / $denA;
$subB = ($numB / $denB) ** 2;

$sup = ($supA - $supB) ** 3;
$inf = 10 ** 3;

$result = $sup / $inf;

echo 'O resultado da equação é ', $result;
