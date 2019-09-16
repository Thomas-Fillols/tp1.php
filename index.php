<?php

include 'Calculator.php';

start_page('titre');

echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>';


$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';

echo "$var1 + $var2 = ";
echo $var1 + $var2;
echo '<br>';
echo $var1 + $var3;


echo '<br>';
echo date('l  F d, Y');
echo '<br>';

$jour = date('l F d, Y');
echo $jour;

echo '<br>';
$jour = date('d/m/Y', strtotime('2020-04-01'));
echo $jour;


end_page('untitle');


