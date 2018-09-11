<?php
ini_set("display_errors", "on");
ERROR_REPORTING(E_ALL);

print '<h1>Peter BE0.02</h2>';

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$array = array($a, $b, $c);

echo ' det mindste tal er = ';
echo $array[0];
echo '<br/>';
echo ' det største tal er = ';
echo $array[2];
echo '<br/>';
print_r($array);


?>
