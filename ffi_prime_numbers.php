<?php
$start = microtime(true);

// to get .so file form .c file
//g++ -c -fPIC primeNumbers.cpp -o primeNumbers.o && g++ primeNumbers.o -shared -o primeNumbers.so
$ffi = FFI::cdef("int main();", "./primeNumbers.so");
$ffi->main();

echo PHP_EOL . PHP_EOL;
echo "time : ".(microtime(true) - $start)." secondes.".PHP_EOL;
echo "memory : ".((memory_get_usage()/1024)/1024)." Mo.".PHP_EOL;
