<?php

// PHP 8.0: New PhpToken Tokenizer class

$code = "<?php echo 'Hello world'; ?>";
$tokens = PhpToken::tokenize($code);
var_dump($tokens);
foreach ($tokens as $token) {
    echo $token . PHP_EOL;
}
