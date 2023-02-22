<?php
function sayHello(string $first, string $last) {

}

function sum(int...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    return $total;
}

sayHello("gie","gie",);

echo sum(1,2,3,4,);