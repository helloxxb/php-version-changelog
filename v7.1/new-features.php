<?php
// 可为空（Nullable）类型
function testReturn(?string $name): ?string {
    return $name;
}
var_dump(testReturn(null));
var_dump(testReturn('a string'));


// Void 函数
function swap(&$left, &$right): void {
    if ($left === $right) {
        return;
    }
    $tmp = $left;
    $left = $right;
    $right = $tmp;
}
var_dump($a = 11, $b = 22, swap($a, $b), $a, $b);


// 短数组语法（[]）
$data = [[1, 'tom'], [2, 'fred']];
// list() style
[$id1, $name1] = $data[0];
// [] style
[$id2, $name2] = $data[1];
var_dump($id1, $id2, $name1, $name2);
foreach ($data as [$id, $name]) {
    echo $id, $name, PHP_EOL;
}


// 类常量可见性
class ConstExample {
    const PUBLIC_A = 'A';
    public const PUBLIC_B = 'B';
    protected const PUBLIC_C = 'C';
    private const PUBLIC_D = 'D';
}
var_dump(
    ConstExample::PUBLIC_A,
    ConstExample::PUBLIC_B
    // ConstExample::PUBLIC_C
);


// iterable 伪类
function iterator(iterable $iter) {
    foreach ($iter as $val) {
        echo $val, PHP_EOL;
    }
}
iterator([1, 2, 3, 4]);
var_dump(is_iterable([1, 2, 3]));  // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));  // bool(true)
var_dump(is_iterable((function () { yield 1; })()));  // bool(true)
var_dump(is_iterable(1));  // bool(false)
var_dump(is_iterable(new stdClass()));  // bool(false)


// 多异常捕获处理
try {
    switch($randomValue = random_int(0, 9)) {
        case 5:
            throw new Exception('random value: ' . $randomValue);
        default:
            throw new ErrorException('other value: ' . $randomValue);
    }
} catch (Exception | ErrorException $ex) {
    var_dump(get_class($ex), $ex->getMessage());
}


// list()现在支持键名
$data = [
    ['id' => 1, 'name' => 'tom'],
    ['id' => 2, 'name' => 'fred']
];
['id' => $id11, 'name' => $name11] = $data[0];
['name' => $name22, 'id' => $id22] = $data[1];
var_dump($id11, $name11, $id22, $name22);


// 支持为负的字符串偏移量
$string = 'bar';
var_dump(
    'the last character of ' . $string . ' is \'' . $string[-1] . '\'',
    'abcdefg'[-2],
    strpos('aabbcc', 'b', -3)
);


// 通过 Closure::fromCallable() 将callables转为闭包
class Test
{
    public function exposeFunction()
    {
        return Closure::fromCallable([$this, 'privateFunction']);
    }

    private function privateFunction($params)
    {
        var_dump($params);
    }
}
$privFunc = (new Test())->exposeFunction();
$privFunc('say something');
$printFunc = Closure::fromCallable(function ($message) {
    var_dump($message);
});
$printFunc('print something');
