<?php

echo hash('murmur3a', 'hello world') . PHP_EOL;
echo hash('murmur3c', 'hello world') . PHP_EOL;
echo hash('murmur3f', 'hello world') . PHP_EOL; // 533f6046eb7f610eab97467d60eb63b1

$context = hash_init('murmur3f');
hash_update($context, 'hello');
hash_update($context, ' ');
hash_update($context, 'world');
echo hash_final($context) . PHP_EOL; // 533f6046eb7f610eab97467d60eb63b1

echo hash('murmur3f', 'php.watch', false, ['seed' => 42]) . PHP_EOL; // 0cafc26e49efe230cdbd109458fef893
echo hash('murmur3f', 'php.watch', options: ['seed' => 42]) . PHP_EOL; // 0cafc26e49efe230cdbd109458fef893
print_r(hash_algos());
