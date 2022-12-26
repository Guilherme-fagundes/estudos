<?php

date_default_timezone_set('America/sao_paulo');

echo "<h1>Diferença entre datas</h1>";
$atual = new DateTime();
echo $atual->format('d/m/Y');

$date2 = new dateTime();
$date2->setDate(2023, 3, 1);


var_dump($atual);

echo $date2->format('d/m/Y');



var_dump($date2->diff($atual));

echo "<hr>";
echo "<h1>Adicionando periodos entre datas</h1>";

$atual = new dateTime();

echo "hoje ". $atual->format('d-m-Y'). '<br>';
 $interval = new DateInterval('P2M');
 $atual->add($interval);


 var_dump($interval);
var_dump($atual);

echo "<hr>";

$atual->modify('+1 day +4 month');

echo $atual->format('d-m-Y');

var_dump($atual);













