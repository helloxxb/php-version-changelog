<?php

// 对字符串键数组的解包支持
$arrayA = ['a' => 1];
$arrayB = ['b' => 2];
var_dump(['a' => 0, ...$arrayA, ...$arrayB, 'd' => 3]);


$array_1 = ['foo', 'bar'];
$array_2 = ['baz', 'qux'];
$array_unpacked = [...$array_1, ...$array_2, ...['quux']];
$array_merged = array_merge($array_1, $array_2, ['quux']);
var_dump($array_unpacked, $array_merged);
