<?php
ini_set("display_errors", "on");
ERROR_REPORTING(E_ALL);

print '<h1>Peter BE.0.1</h1>';

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

echo 'a) ';
echo $a;
echo '<br/>';
echo 'b) ';
echo $b;
echo '<br/>';
echo 'c) ';
echo $c;
echo '<br/>';

if ($a>$b && $a>$c){

    echo ' a er størst';

}

elseif ($b>$a && $b>$c){

    echo ' b er størst';

}


elseif ($c>$a && $c>$b){

    echo ' c er størst';

}
?>
