<?php
// 新的对象类型
function test(object $obj): object {
    return $obj;
}
var_dump(test(new stdClass()));


// 允许重写抽象方法(Abstract method)
abstract class A
{
    abstract public function test(string $s);
}
abstract class B extends A
{
    abstract public function test(string $s): int;
}


// 使用Argon2算法生成密码散列
var_dump(
    password_hash('123456', PASSWORD_ARGON2I),
    password_hash('123456', PASSWORD_ARGON2I, ['memory_cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST]),
    password_hash('123456', PASSWORD_ARGON2I, ['time_cost' => PASSWORD_ARGON2_DEFAULT_TIME_COST]),
    password_hash('123456', PASSWORD_ARGON2I, ['threads' => PASSWORD_ARGON2_DEFAULT_THREADS])
);


// 扩展了参数类型
interface AA
{
    public function test(array $input);
}
class BB implements AA
{
    public function test($input){
        var_dump($input);
    }
}


// 允许分组命名空间的尾部逗号
// use Foo\Bar\{Foo, Bar, Baz,};


// 新的全局常量
var_dump(
    PHP_FLOAT_DIG,
    PHP_FLOAT_EPSILON,
    PHP_FLOAT_MIN,
    PHP_FLOAT_MAX,
    PHP_OS_FAMILY
);


// 防止 number_format() 返回负零
var_dump(number_format(-0.01));

var_dump(is_object(new __PHP_Incomplete_Class()));
