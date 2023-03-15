<?php
namespace Luisafischer157\Logger;

interface ILogger {
    public function  logEntry(string $line): void;
}
