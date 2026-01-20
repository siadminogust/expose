<?php

namespace Tests\Expose;

use Expose\Log;

class MockLogger extends Log
{
    public function __call($func, $args)
    {
        return true;
    }

    public function emergency($message, array $context = array()): void
    {
        return;
    }

    public function alert($message, array $context = array()): void
    {
        return;
    }

    public function critical($message, array $context = array()): void
    {
        return;
    }

    public function error($message, array $context = array()): void
    {
        return;
    }

    public function warning($message, array $context = array()): void
    {
        return;
    }

    public function notice($message, array $context = array()): void
    {
        return;
    }

    public function info($message, array $context = array()): void
    {
        return;
    }

    public function debug($message, array $context = array()): void
    {
        return;
    }

    public function log($level, $message, array $context = array()): void
    {
        return;
    }
}
