<?php
namespace Application;

class ReturnTypeDeclaration
{
    public function test(string $name) : string
    {
        return $name;
    }
}
