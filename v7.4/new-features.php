<?php
// 属性添加限定类型
class Comment
{
    public int $authorId;
    public string $name;

    public function __construct(int $authorId, string $name)
    {
        $this->authorId = $authorId;
        $this->name = $name;
    }
}
$comment = new Comment(1, 'Tony');
var_dump($comment, $comment->authorId);


// 箭头函数
$factor = 10;
$nums = array_map(fn($n) => $n * $factor, [1, 2, 3, 4]);
var_dump($nums);


// 有限返回类型协变与参数类型逆变
class CCC {}
class DDD extends CCC {}
class Producer
{
    public function method(): CCC {
        return new CCC();
    }
}
class ChildProducer extends Producer
{
    public function method(): DDD
    {
        return new DDD();
    }
}
$producer = new Producer();
$cProducer = new ChildProducer();
var_dump(
    $producer->method(),
    $cProducer->method()
);


// 空合并运算符赋值
$array['key'] ??= 'value';
// 等同于以下旧写法
if (!isset($array['key2'])) {
    $array['key2'] = 'value2';
}
if (!isset($array['key2'])) {
    $array['key2'] = 'value22';
}
var_dump($array);


// 数组展开操作
$parts = ['apple', 'pear'];
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];
var_dump($parts, $fruits);


// 数值文字分隔符（_）
echo 6.674_083e-11, PHP_EOL;
echo 299_792_458, PHP_EOL;
echo 0xCAFE_F00D, PHP_EOL;
echo 0b0101_1111, PHP_EOL;


// strip_tags() with array of tag names
$string = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
var_dump(
    strip_tags($string),
    strip_tags($string, '<p><a>'),
    strip_tags($string, '<p>'),
    strip_tags($string, ['a'])
);


// 自定义对象序列化
class Phone
{
    public string $nationCode = '+86';
    public string $number = '155-8990-1234';
    public ?string $null;

    public function __serialize(): array
    {
        return [
            'nation_code' => $this->nationCode,
            'number' => $this->number,
        ];
    }

    public function __unserialize(array $data): void
    {
        foreach ($data as $property => $value) {
            $property = ucwords($property);
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }
}
$phone = new Phone();
var_dump(
    $phoneSerialize = serialize($phone),
    unserialize($phoneSerialize)
);
