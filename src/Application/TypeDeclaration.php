<?php
namespace Application;

class TypeDeclaration
{
    public function test(string $name, int ...$ints) 
    {
        return array_sum($ints);
    }
}
