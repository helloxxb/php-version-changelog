<?php

class FooBar {
    public static function getInstance(): static {
        return new static();
    }
}

class Foo {
    public function getInstance(): mixed {}
}
class Bar extends Foo {
    public function getInstance(): object|null {}
}
class Baz extends Bar {
    public function getInstance(): object {}
}
class Qux extends Baz {
    public function getInstance(): parent {}
}
class Quux extends Qux {
    public function getInstance(): self {}
}
class Corge extends Quux {
    public function getInstance(): static {
        return new static();
    }
}
var_dump(
    (new Corge())->getInstance()
);
