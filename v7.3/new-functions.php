<?php

$array = ['first' => 1, 'two' => 2, 'three' => 3];
var_dump(
    array_key_first($array),
    array_key_last($array)
);


// 获取系统的高精度时间
var_dump(
    $nanoseconds = hrtime(true),
    list ($seconds, $nanoseconds2) = hrtime(false),
    $seconds, $nanoseconds2
);


var_dump(net_get_interfaces());
