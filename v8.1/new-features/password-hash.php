<?php

print_r(password_algos());
$passwordHash = password_hash('123456', PASSWORD_DEFAULT, ['cost' => 12]);
var_dump($passwordHash, password_verify('123456', $passwordHash));

// 寻找最佳的 cost 值
$timeTarget = 0.05; // 50 毫秒（milliseconds）
$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    password_hash('test', PASSWORD_BCRYPT, ['cost' => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo 'Appropriate Cost Found: ' . $cost;
