<?php

//match expression sama seperti switch case
//
$value = "E";
$result = "";

//switch
switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
}

//match expression lebih simple(cocoknya buat yang sederhana aja)
//dapat mengembalikan nilai
$result = match ($value) {
    "A", "B", "C" =>  "Anda Lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin anda salah jurusan",
    default => "Nilai apa itu?",
};

echo $result . PHP_EOL;

//match expression non equals, sama seperti ifelse, expresinya boolean
$value = 80;

$result = match (true) {
    $value > 80 => "A",
    $value > 70 => "B",
    $value > 60 => "C",
    $value > 50 => "D",
    default => "E"
};
echo $result . PHP_EOL;

//contaoh lain
$name = "Mr. Ali";

$result = match (true) {
    str_contains($name, "Mr. ") => "Hello Sir",
    str_contains($name, "Mrs. ") => "Hello Sir",
    default => "Hello",
};

echo $result . PHP_EOL;
