<?php

// never 返回类型
function redirect(string $url): never {
    header('Location: ' . $url);
    // return; // PHP Fatal error
    exit();
}

function dispatch(string $message): never {
    echo $message;
}
dispatch('将抛出TypeError异常');
