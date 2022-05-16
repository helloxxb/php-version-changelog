<?php

// 判断是否为一个从 0 开始的连续整数的数组
var_dump(
    array_is_list([]),
    array_is_list([1, 2, 3]),
    array_is_list([0, 1, 2, 3]),
    array_is_list([0 => 'a', 2 => 'b', 4 => 'c', 6 => 'd']), // false
);
