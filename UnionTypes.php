<?php

class Example
{
    //php versi 7 property
    // public string $data; // type string
    //public $data //type bebas

    //php versi 8 fitur UnionTypes property
    // boleh memilih banyak type tergantung kebutuhan
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Ali";
$example->data = 22;
$example->data = true;
$example->data = [];

//php versi 7 function param
// function sampleFunction(string $data)
// {
// }

//php versi 8 fitur UnionTypes param function
// boleh memilih banyak type tergantung kebutuhan
function sampleFunction(string|array $data): void
{
    if (is_array($data)) {
        echo "Array" . PHP_EOL;
    } else if (is_string($data)) {
        echo "String" . PHP_EOL;
    }
}

sampleFunction("Eko");
sampleFunction([]);

////php versi 8 fitur UnionTypes return function
// boleh memilih banyak type tergantung kebutuhan
function sampleFunctionReturn(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String" . PHP_EOL;
    }
}
var_dump(sampleFunctionReturn([]));
var_dump(sampleFunctionReturn("Ali"));
