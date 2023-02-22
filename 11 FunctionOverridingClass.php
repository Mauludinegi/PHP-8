<?php

class ParentClass
{
    private function method(string $name)
    {
    }
}

class ChildClass extends ParentClass
{
    public function method(int $name)
    {
    }
}
