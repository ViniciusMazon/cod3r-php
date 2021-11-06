<div class="title">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br/>';
echo var_dump(1 + 1), '<br/>';
echo var_dump(1 + 2.5), '<br/>';
echo var_dump(1 + 2.0), '<br/>';

echo 10 - 2, '<br/>';

echo 10 * 2, '<br/>';

echo 10 * 2, '<br/>';

echo 10 ** 2, '<br/>'; # potência

// Divisão
echo var_dump(7 / 4), '<br/>'; # converte o resultado para float
echo intdiv(7, 4), '<br/>'; # traz apenas o valor inteiro
echo round(7, 4), '<br/>'; # arredonda o valor
echo 4 % 2, '<br/>'; # modulo
echo 5 % 2, '<br/>'; # modulo
echo 7 / 0, '<br/>'; # infinito
// echo intdiv(7, 0); # GERA UM ERO

// Precedência de operadoes
// (), **, /, *, %, + ...
echo 2 + 3 * 4, '<br/>';
echo (2 + 3) * 4, '<br/>';