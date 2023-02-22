<?php
$value = "E";

$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda tidak lusus",
    "E" => "Sepertinya anda salah jurusan",
    default => "nilai apa itu"
};

echo $result . PHP_EOL;

$value = 80;
$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo "Nilai $value" . PHP_EOL;

$name = "Mr. Gie";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello there"
};

echo $result . PHP_EOL;
