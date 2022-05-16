<?php

echo hash('xxh32', '123456') . PHP_EOL;
echo hash('xxh64', '123456') . PHP_EOL;
echo hash('xxh3', '123456') . PHP_EOL;
echo hash('xxh3', '123456 php.watch') . PHP_EOL;
echo hash('xxh128', '123456') . PHP_EOL;

echo hash('xxh3', '123456', false, ['seed' => 42]) . PHP_EOL;
$randomBytes = random_bytes(256);
echo $randomBytes . PHP_EOL;
echo hash('xxh3', '123456', options: ['secret' => $randomBytes]) . PHP_EOL;
