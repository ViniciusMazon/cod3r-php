<div class="title">Boolean</div>

<?php
echo TRUE, '<br/>';
echo FALSE, '<br/>';

echo var_dump(true), '<br/>';
echo var_dump(False), '<br/>';

echo 2 > 1, '<br/>'; # true
echo 2 < 1, '<br/>'; # false

echo is_bool(false), '<br/>'; # true
echo is_bool(2 > 1), '<br/>'; # true

// Fazer as regras de conversão
echo var_dump((bool) 0), '<br/>'; # converte inteiro para bool # false
# Apenas zero é convertido para false
echo var_dump((bool) 1), '<br/>'; # true
echo var_dump((bool) 2), '<br/>'; # true
echo var_dump((bool) -2), '<br/>'; # true
echo var_dump((bool) 0.001), '<br/>'; # true

echo var_dump((bool) ''), '<br/>'; # false
echo var_dump((bool) '0'), '<br/>'; # false
echo var_dump((bool) '00'), '<br/>'; # true
echo var_dump((bool) 'alguma coisa'), '<br/>'; # true
echo var_dump((bool) ' '), '<br/>'; # true

