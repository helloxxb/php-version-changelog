<?php

// First-class 可调用语法

// PHP < 8.1
// $foo = [$this, 'foo'];
$fn = Closure::fromCallable('strlen');
echo $fn('foobar') . PHP_EOL;

// PHP >= 8.1
// $foo = $this->foo(...);
$fn = strlen(...);
echo $fn('foobar') . PHP_EOL;

// 语法
// 函数 $callable = strlen(...);
// 类方法 $callable = $item->doSomething(...);
// 静态方法 $callable = $item::doSomething(...);
// 匿名函数 $function = function() {}; $callable = $function(...);
