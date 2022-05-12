<?php

// match 表达式，与 switch 块类似

$name = match (2) {
    1 => 'One',
    2 => 'Two'
};
echo $name . PHP_EOL;

function example($method): string
{
    // 必须匹配一个条件，否则抛出 Uncaught UnhandledMatchError 异常
    return match ($method) {
        'post' => 'Send a post request.',
        'get', 'head' => 'Send a get or head request.',
        // default => throw new Exception('Unsupported')
        default => 'Unsupported: '. $method
    };
}
 echo example('post') . PHP_EOL;
 echo example('get') . PHP_EOL;
 echo example('head') . PHP_EOL;
 echo example('option') . PHP_EOL; //Unsupported

// 严格匹配；不想 switch 需要使用 === 运算符才可以严格匹配。
function read(mixed $key): string {
    return match ($key) {
        1 => 'Integer 1',
        '1' => 'String 1',
        true => 'Bool true',
        [] => 'Empty array',
        [1] => 'Array [1]',
    };
}

echo read(1) . PHP_EOL; // Integer 1
echo read('1') . PHP_EOL; // String 1
echo read(true) . PHP_EOL; // Bool true
echo read([]) . PHP_EOL; // Empty array
echo read([1]) . PHP_EOL; // Array [1]
echo read(array()) . PHP_EOL; // Empty array
echo read(array(1)) . PHP_EOL; // Array [1]
// echo read(array(2)) . PHP_EOL; // UnhandledMatchError


// 匹配任意表达式
// match表达式允许将给定值与表达式匹配。
function exampleMessage($foo = 404): string {
    return match($foo){
        404 => 'Page not found',
        \http\client\Response::TYPE_RESPONSE => 'Redirect',
        (new \http\Client())->getResponse()->getResponseCode() => 'Client Error',
        default => 'Unknown error'
    };
}
