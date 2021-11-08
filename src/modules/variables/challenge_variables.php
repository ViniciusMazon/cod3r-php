<div class="title">Desafio Variáveis</div>

<?php
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "Nossa! Eu consegui responder esse desafio.";

echo '<br/>' . "{$a}! {$Nossa} {$Eu} {$consegui} {$responder} {$esse}.";
echo '<br/>' . "{$a}! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";