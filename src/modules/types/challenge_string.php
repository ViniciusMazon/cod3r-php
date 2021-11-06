<div class="title">Desafio String</div>

<?php
$value = '!AbcaBcabc';
$findBy = 'abc';

echo strpos($value, $findBy), '<br/>';
echo stripos($value, $findBy), '<br/>'; # Ignora case

echo strpos(strtolower($value), $findBy), '<br/>';