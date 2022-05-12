<?php

// mixed 伪类型
// mixed相当于一个联合类型：
// string|int|float|bool|null|array|object|callable|resource

class Example {
    public mixed $exampleProperty;
    public function foo(mixed $foo): mixed {return $foo;}
}

class A {
    public function foo() {}
    public function bar() {}
    public function baz(): mixed {}
}
class B extends A{
    public function foo(): mixed {}
    public function bar(): void {}
    public function baz(): string {}
}

function dd(mixed $var): void {
    var_dump($var);
}
