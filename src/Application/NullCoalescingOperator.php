<?php

namespace Application;

class NullCoalescingOperator
{
    public function test(string $name = null) {
        return $name ?? 'Anderson Vinicius';
    }
}
