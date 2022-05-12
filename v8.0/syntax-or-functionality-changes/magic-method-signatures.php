<?php
// PHP 8.0：严格执行类魔术方法签名

class FooBar implements Stringable, Serializable {
    public function __construct(
        public string $name = 'foobar'
    ) {}

    public function __toString(): string
    {
        $suffix = $this::class; // @since 8.0
        return $this->serialize() .'||'. $suffix;
        // return json_encode($this);
    }

    public function serialize()
    {
        return serialize($this);
    }

    public function unserialize(string $data)
    {
        return unserialize($data);
    }
}
$object = new FooBar();
var_dump(strval($object));
