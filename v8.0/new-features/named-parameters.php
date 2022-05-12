<?php

// 自定义命名参数
function say(string $name, int $age): void
{
    echo "$name, $age" . PHP_EOL;
}

// 以下两个语句效果等同
// 使用顺序传递参数：
say('李四', 19);
// 使用命名参数：
say(name:'李四', age:19);
say(age:19, name:'李四');

// 内置函数
echo str_contains('named parameters', 'parameters') . PHP_EOL;
echo str_contains(haystack: 'named parameters', needle: 'parameters') . PHP_EOL;
var_dump(array_fill(0, 5, 50));
var_dump(array_fill(start_index: 0, count: 5, value: 50));

// 检查字符串是否以给定的子字符串结尾
if (str_ends_with('abc', '')) {
    echo 'All strings end with the empty string';
}
