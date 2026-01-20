<?php

namespace Tests\Expose;

use Expose\Queue;

class MockQueue extends Queue
{
    public function getPending($limit)
    {
        return array();
    }

    public function markProcessed($id)
    {
        return true;
    }

    public function add($data)
    {
        return true;
    }
}
