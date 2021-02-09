<?php

namespace Dapr\consistency;

/**
 * Class StrongLastWrite
 * @package Dapr\consistency
 * @codeCoverageIgnore Trivial
 */
class StrongLastWrite extends Consistency
{
    public function get_consistency(): string
    {
        return self::STRONG;
    }

    public function get_concurrency(): string
    {
        return self::LAST_WRITE;
    }
}
