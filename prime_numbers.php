<?php
$start = microtime(true);

$n = 2 * (10 ** 6);
//$n = 120;
$numbers = range(2, $n);

$i = 2;
while ($i <= sqrt($n)) {
    foreach ($numbers as $key => $number) {
        if ($number === $i) {
            continue;
        }
        if ($number % $i === 0) {
            unset($numbers[$key]);
        }
    }
    $i++;
}

//foreach ($numbers as $number) {
//    echo $number." ";
//}

echo PHP_EOL . PHP_EOL;
echo "time : ".(microtime(true) - $start)." secondes.".PHP_EOL;
echo "memory : ".((memory_get_usage()/1024)/1024)." Mo.";
