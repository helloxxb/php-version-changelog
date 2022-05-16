<?php

// 新的初始化器

interface Logger {}
class NullLogger implements Logger {}

// PHP < 8.1
class Service
{
    private Logger $logger;
    public function __construct(?Logger $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
    }
}

// PHP >= 8.1
class Service2
{
    private Logger $logger;
    public function __construct(
        Logger $logger = new NullLogger()
    ) {
        $this->logger = $logger;
    }
}
