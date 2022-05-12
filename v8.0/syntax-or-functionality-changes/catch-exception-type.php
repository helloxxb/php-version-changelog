<?php

// < PHP 8.0
try {
    // try something
}
catch (\InvalidArgumentException $ex) { // "$ex" is required
    // handle the exception
}

// >= PHP 8.0
try {
    // $container->get('api-keys.http2-pro');
}
// catch (InvalidArgumentException $exception) {
catch (\InvalidArgumentException) {
    // $logger->log('API key not set');
}
