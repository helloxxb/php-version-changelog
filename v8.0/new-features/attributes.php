<?php

// 注解

#[Attribute(Attribute::TARGET_FUNCTION)]
class ExampleAttribute {
    public string $foo;
    public string $bar;

    public function __construct(string $foo, string $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }

    public function print()
    {
        echo "$this->foo, $this->bar\n";
    }
}

#[ExampleAttribute('foo', 'bar')]
function example() {}
$ref = new ReflectionFunction('example');
$attrs = $ref->getAttributes(ExampleAttribute::class);
/*
array(1) {
  [0]=>
  object(ReflectionAttribute)#2 (0) {
  }
}
 */
$inst = $attrs[0]->newInstance();
/*
object(ExampleAttribute)#3 (2) {
  ['foo']=>
  string(3) 'foo'
  ['bar']=>
  string(3) 'bar'
}
 */
$inst->print(); // foo, bar
// var_dump($attrs, $inst, $ref->getAttributes());
