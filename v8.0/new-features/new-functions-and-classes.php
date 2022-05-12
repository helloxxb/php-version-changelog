<?php

// PHP 8.0 新函数和类

var_dump(str_contains('Foobar', 'Foo')); // bool(true)
var_dump(str_starts_with('PHP 8.0', 'PHP')); // bool(true)
var_dump(str_ends_with('PHP 8.0', '8.0')); // bool(true)

var_dump(fdiv(20.20, 1.1)); // float(18.36363636363636)
var_dump(get_resource_id(fopen('./weakmap.php', 'r')));
var_dump(get_resource_id(fopen('./attributes.php', 'r')));
var_dump(get_debug_type(222.22));
