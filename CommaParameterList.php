<?php

//doc: https: //wiki.php.net/rfc/trailing%20comma%20in%20parameter%20list
// doc: https://wiki.php.net/rfc/trailing%20comma%20in%20closure%20use%20list
function sayHello(string $first, string $last)
{
}

function sum(int ...$values)
{
}

sayHello(
    "Ali",
    "Albair", // kalau di php 7 comma ini /  comma terakhir harus di hapus
);

sum(
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1, // kalau di php 7 comma ini /  comma terakhir harus di hapus
);

$array = [
    "first" => "Muhammad",
    "middle" => "Ali",
    "last" => "Alalbair", // feature comma di array mempermudah duplicate
];
