<?php

namespace Application;

class ConstantArrays
{
    public function __construct() {
        define('ANIMALS', [
            'dog',
            'cat',
            'bird'
        ]);
    }

    public function test()
    {
        return ANIMALS[0];
    }
}
