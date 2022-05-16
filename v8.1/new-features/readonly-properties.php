<?php

// 只读属性
class ReadonlyExample
{
    public readonly int $uid;

    public function __construct(int $uid, public readonly int $age = 18)
    {
        $this->uid = $uid;
    }
}

$user = new ReadonlyExample(100);
// $user->uid = 200; // Uncaught Error: Cannot modify readonly property
echo $user->uid . '--' . $user->age . PHP_EOL;


// 只读属性存储对象
class Author
{
    public function __construct(public string $name)
    {
    }

    public function printName(): void
    {
        print 'Author name: ' . $this->name . PHP_EOL;
    }
}

class PostExample
{
    public readonly Author $author;
    public readonly Author $operator;

    public function __construct(Author $author, Author $operator)
    {
        $this->author = $author;
        $this->operator = clone $operator;
    }

    public function printAuthorName(): void
    {
        print 'Post author name: ' . $this->author->name . PHP_EOL;
    }

    public function printOperatorName(): void
    {
        print 'Post operator name: ' . $this->operator->name . PHP_EOL;
    }
}

$author = new Author('Tony');
$operator = new Author('Sheldon');
$post   = new PostExample($author, $operator);
$post->printAuthorName();
$post->printOperatorName();
$author->name = 'Peter';
$operator->name = 'Young Sheldon';
$post->printAuthorName();
$post->printOperatorName();
$post->author->name = 'override author name from post';
$post->operator->name = 'override operator name from post';
$post->printAuthorName();
$post->printOperatorName();
$author->printName();
$operator->printName();
