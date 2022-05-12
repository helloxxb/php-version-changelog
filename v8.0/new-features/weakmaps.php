<?php

// WeakMap 允许存储和关联对象键的任意值，但在不阻止垃圾收集器清除它的情况下，
// 对象在其他任何地方都超出了范围。

$map = new splObjectStorage();
$object = new stdClass();
$map[$object] = 'Foo';
var_dump(count($map)); // int(1)
unset($object);
var_dump(count($map)); // int(1)
echo '-------' . PHP_EOL;

$map = new WeakMap();
$object = new stdClass();
$map[$object] = 'Foo';
var_dump(count($map)); // int(1)
unset($object);
var_dump(count($map)); // int(0)
echo '-------' . PHP_EOL;

$map = new splObjectStorage();
$map[new stdClass()] = 'Foo';
var_dump(count($map)); // int(1)
echo '-------' . PHP_EOL;

$map = new WeakMap();
$map[new stdClass()] = 'Foo';
var_dump(count($map), $map); // int(0)
