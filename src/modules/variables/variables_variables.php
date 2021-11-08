<div class="title">Variáveis Variáveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';
echo '<br/>' . "$a {$$a} $valorA";

$teste = 'ok';
echo '<br/>' . "{$teste} {$$teste2} {$teste2}";
