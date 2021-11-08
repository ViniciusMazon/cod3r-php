<div class="title">Interpolação</div>

<?php

$number = 10;
echo '<br/> $number';
echo "<br/> $number";

$text = "<br/> A sua nota é: $number";
echo $text;

$object = 'caneta';
echo "<br/> Eu tenho 5 $object";
echo "<br/> Eu tenho 5 {$object}s";

echo "<br/> Eu tinha 5 { $object}s"; # espaço no inicio causa um problema
echo "<br/> Eu tinha 5 {$object}s";
