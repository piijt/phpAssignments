<?php
ini_set("display_errors", "on");
ERROR_REPORTING(E_ALL);

print '<h1>Peter BE.0.0</h1>';

    for ($i = 0; $i < 10; $i++){
        for ($j = 0; $j < 10; $j++){
            $arr[$i][$j] = 0;
            if ($i == $j)
                $arr[$i][$j] = 1;
  }
}

for ($i = 0; $i < 10; $i++){
    for ($j = 0; $j < 10; $j++){
        echo $arr[$i][$j];
  }
  echo '<br/>';
}
 ?>
