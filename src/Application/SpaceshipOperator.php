<?php
namespace Application;

class SpaceshipOperator
{
    public function test()
    {
        echo 1 <=> 1; //  0
        echo 1 <=> 2; // -1
        echo 2 <=> 1; //  1
    }
}
