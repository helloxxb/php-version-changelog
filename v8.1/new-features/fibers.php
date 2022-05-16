<?php

function writeToLog(string $message): void
{
    echo $message . PHP_EOL;
}

function copyFunc(array $files): void
{
    $fiber = new Fiber(function () use ($files) : void {
        foreach ($files as $source => $destination) {
            // copy($source, $destination);
            Fiber::suspend([$source, $destination]);
        }
    });
    // Pass the files list into Fiber.
    $copied = $fiber->start($fiber);
    $copiedCount = 1;
    $totalCount = count($files);
    while (!$fiber->isTerminated()) {
        $percentage = round($copiedCount / $totalCount, 2) * 100;
        echo "[$percentage%]: Copied $copied[0] to $copied[1]" . PHP_EOL;
        $copied = $fiber->resume();
        ++$copiedCount;
    }
    echo 'Completed' . PHP_EOL;
}

copyFunc([
    'enums.php' => 'dest/enums.php',
    'fibers.php' => 'dest/fibers.php',
]);
