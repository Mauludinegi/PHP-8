<?php
function sayHello(?string $name)
{
    if (is_null($name)) {
        throw new Exception("Name is null");
    }
    echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name)
{

    $result = !is_null($name) && !trim($name) == "" ? "Hello $name" : throw new Exception("Tidak boleh null");

    echo $result . PHP_EOL;
}

echo sayHelloExpression(null);
