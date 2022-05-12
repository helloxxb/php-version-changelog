<?php

// PHP 8.0 添加了一个新接口 Stringable

class Foo implements Stringable {
    public function __toString(): string {
        return 'FooBar';
    }
}

class Bar {}

function safePrint(string|Stringable $input): void {
    echo htmlspecialchars((string) $input);
}

safePrint('a string');
safePrint(new Foo());
// safePrint(new Bar()); // Uncaught TypeError


class FooBar {
    public function __toString(): string {
        return 'FooBar';
    }
}
var_dump(class_implements(new FooBar()));
var_dump(class_implements('FooBar'));
// array("Stringable" => "Stringable")
