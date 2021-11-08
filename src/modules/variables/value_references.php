<div class="title">Valor vs Referência</div>

<?php
$var = 'valor inicializado';
echo '<br/>' . $var;

$varValue = $var;
$varValue = 'Mesmo valor';
echo '<br/>' . "{$varValue}, {$var}";

$varReference = &$var;
$varReference = 'Mesmo valor';
echo '<br/>' . "{$varReference}, {$var}";