<?php

// 标量类型声明
function sumOfInts(int ...$ints) {
    var_dump(array_sum($ints));
}
sumOfInts(1, 2, 3, 4, 5);

// 返回值类型声明Return type declarations
function arraysSum(array ...$arrays): array {
    return array_map(function (array $array) {
        return array_sum($array);
    }, $arrays);
}
var_dump(arraysSum([1, 2, 3], [4, 5, 6]));

// null合并运算符，等同于 isset($var) ? $var : null;
$username = $_GET['user'] ?? 'nobody';
var_dump($username);

// 太空船操作符（组合比较符）
// 整数
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
// 浮点数
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
// 字符串
echo 'a' <=> 'a'; // 0
echo 'a' <=> 'b'; // -1
echo 'b' <=> 'a'; // 1

// 通过 define() 定义常量数组
define('ANIMALS', ['dog', 'cat', 'bird']);
var_dump(ANIMALS, ANIMALS[2]);


// 匿名类
interface Logger {
    public function log(string $msg);
}
$echoLogger = new class implements Logger {
    public function log(string $msg) {
        echo $msg;
    }
};
$echoLogger->log('echo something.');


// Unicode codepoint 转译语法
echo PHP_EOL;
echo "\u{aa}";
echo "\u{0000aa}";
echo "\u{9999}";


// Closure::call()
class A {private $x = 1;}
// < PHP7
$getXCB = function () {return $this->x;};
$getX = $getXCB->bindTo(new A, 'A'); // 中间层闭包
echo $getX();
// >= PHP7
$getX2 = function () {return $this->x;};
echo $getX2->call(new A());


// assert 断言结构
ini_set('assert.exception', 1);
class CustomError extends AssertionError {}
// assert(false, new CustomError('Some error message'));


// Group use declarations
// PHP 7+ 及更高版本的代码
// use some\namespace\{ClassA, ClassB, ClassC as C};
// use function some\namespace\{fn_a, fn_b, fn_c};
// use const some\namespace\{ConstA, ConstB, ConstC};


// 生成器可以返回表达式
$gen = (function () {
    yield 1;
    yield 2;
    return 3;
})();
foreach ($gen as $val) {
    echo $val, PHP_EOL;
}
echo $gen->getReturn(), PHP_EOL;


// Generator delegation
function gen2() {
    yield 11;
    yield 22;
    yield from gen22();
}
function gen22() {
    yield 33;
    yield 44;
}

foreach (gen2() as $value) {
    echo $value, PHP_EOL;
}


// 整数除法函数 intdiv()
var_dump(intdiv(10, 3));


// 新增函数 preg_replace_callback_array()
$subject = 'Aaaaaa Bbb';
preg_replace_callback_array([
    '~[a]+~i' => function ($match) {
        echo strlen($match[0]), ' matches for "a" found', PHP_EOL;
    },
    '~[b]+~i' => function ($match) {
        echo strlen($match[0]), ' matches for "b" found', PHP_EOL;
    }
], $subject);
// 将文本中的年份增加一年.
$text = "April fools day is 04/01/2002\n";
$text .= "Last christmas was 12/24/2001\n";
// 回调函数
function next_year($matches) {
    var_dump($matches);
    // 通常: $matches[0]是完成的匹配
    // $matches[1]是第一个捕获子组的匹配
    // 以此类推
    return $matches[1] . ($matches[2] + 1);
}
echo preg_replace_callback('|(\d{2}/\d{2}/)(\d{4})|', 'next_year', $text);


// 新加入两个跨平台的函数，用来产生高安全级别的随机字符串和随机整数
$bytes = random_bytes(5); // string(5) '�e{G�'
var_dump($bytes, bin2hex($bytes)); // string(10) 'ad657b47e0'
var_dump(random_int(100, 999));
var_dump(random_int(-1000, 0));
