<?php

// 构造函数属性

class UserExample {
    public function __construct(
        private string $name,
        private int $age
    ) {}

    public function print()
    {
        echo "$this->name, $this->age\n";
    }
}

$person = new UserExample(name: 'Jetbrains', age: 18);
$person->print();
