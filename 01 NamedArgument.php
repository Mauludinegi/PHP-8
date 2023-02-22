<?php
function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Gie", "mauludin", "purnama");
sayHello(last:"mauludin", first: "gie", middle:"purnama");
sayHello(first:"Gie", last:"Mauludin");