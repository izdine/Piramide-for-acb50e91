<?php
echo "Hoeveel stapels wil je hebben?:\n";
$e = readline ();
for ($i=1; $i < $e; $i++) {
  for ($j= 1; $j <= $i; $j++) {

    echo "*";
  }
echo ''. PHP_EOL;

}

 ?>
