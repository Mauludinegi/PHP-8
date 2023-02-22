<?php
class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Gie";
$example->data = 19;
$example->data = true;
$example->data = [];

var_dump($example);

function sampleFunction(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Gie"));
var_dump(sampleFunction([1, 2, 3]));
