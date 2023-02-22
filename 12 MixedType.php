<?php
function testMixed(mixed $params): mixed {
    if(is_array($params)) {
        return [];
    } else if(is_string($params)) {
        return "Gie";
    } else if(is_int($params)) {
        return $params;
    } else if(is_bool($params)) {
        return true;
    } else {
        return null;
    }
}

var_dump(testMixed(1));