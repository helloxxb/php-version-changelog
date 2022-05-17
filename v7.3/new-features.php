<?php

// 更灵活的 Heredoc 和 Nowdoc 语法
// Heredoc 结构
// < PHP7.3
    echo <<<END
        <h3>a</h3>
    <strong>b</strong>
END;
    echo <<<END
        <h3>a</h3>
    <strong>b</strong>
    END;
    echo <<<END
   a
   b
   c
   END;

// Nowdoc 结构
echo PHP_EOL;
echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;
$name = 'Tony';
echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1}.
This should not print a capital 'A'; \x41
EOT;


// instanceof 运算符
class BookExample {}
$book = new BookExample();
var_dump(
    $book instanceof BookExample,
    (new stdClass()) instanceof BookExample
);


// 使用Argon2id算法生成密码散列
var_dump(
    password_hash('123456', PASSWORD_ARGON2ID),
    password_hash('123456', PASSWORD_ARGON2ID, ['memory_cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST]),
    password_hash('123456', PASSWORD_ARGON2ID, ['time_cost' => PASSWORD_ARGON2_DEFAULT_TIME_COST]),
    password_hash('123456', PASSWORD_ARGON2ID, ['threads' => PASSWORD_ARGON2_DEFAULT_THREADS])
);


// BC 数学函数
// 默认小数点位数： 3
bcscale(3);
echo bcdiv('105', '6.55957'); // 16.007
// 不调用 bcscale() 也一样
echo bcdiv('105', '6.55957', 3); // 16.007


// 命名捕获支持
mb_ereg('(?<word>\w+)', '中国', $matches);
var_dump($matches, $matches['word']);
