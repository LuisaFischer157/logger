<?php
namespace Luisafischer157\Logger;

class EchoLogger implements ILogger {

    public function logEntry(string $line): void
    {
        echo $line . "\n";
    }
}