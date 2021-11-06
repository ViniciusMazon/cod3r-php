<div class="title">Conversões</div>

<?php
echo is_int(PHP_INT_MAX), '<br />';
echo var_dump((float) 3), '<br />'; # cast
echo var_dump((int) 3.5), '<br />'; # cast que perde informação
echo var_dump((float) "3.5"), '<br />';
echo var_dump(intval(2.8, 10)), '<br />'; # trunca o valor da base selecionada # retorna 2

echo var_dump(3 + "2"), '<br />'; # entende como soma e não como concatenação, convertendo a string para int
echo var_dump(1 + 'cinco'), '<br />'; # ignora a string
echo var_dump(1 + '5 cinco'), '<br />'; # ignora a string mas entende o número # 6
echo var_dump(1 + 'cinco 5'), '<br />'; # ignora a string e não entende o número # 6
echo var_dump(1 + '2 + 5'), '<br />'; # entende o primeiro número e ignora o restante # 3

echo var_dump(1 + '3.2'), '<br />';
echo var_dump(1 + '-3.2e2'), '<br />';