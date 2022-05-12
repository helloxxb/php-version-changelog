<?php

// 联合类型
// function parse_value(string|int|float $value): string|null {}

function example(string|int|float $value): string {
    var_dump($value);
    return strval($value);
}
example('hello');
example(100);
example(100.10);
example(false);
// PHP Fatal error:  Uncaught TypeError
// example(function () {
//
// });
