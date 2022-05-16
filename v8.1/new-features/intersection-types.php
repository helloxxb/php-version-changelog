<?php

// 交集类型（Intersection Types），正好与联合类型(Union Types)相反

function count_and_iterate(Iterator&Countable $value): void {
    foreach ($value as $val) {
        print 'val: ' . $val . PHP_EOL;
    }
    print 'count: '. count($value) . PHP_EOL;
}

class CountableIterator implements Iterator, Countable
{
    public array $data = [0, 1, 2, 3, 4];
    private int $index = 0;

    public function current(): mixed
    {
        return $this->data[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return $this->index < count($this->data);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function count(): int
    {
        return count($this->data);
    }
}

// count_and_iterate(new stdClass()); // Uncaught TypeError
count_and_iterate(new CountableIterator());
