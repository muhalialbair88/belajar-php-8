<?php
//ini feature improvement feature dari php versi sebelum
// doc : https://wiki.php.net/rfc/named_params

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// function default argument (PHP 8)
//sudah tidak error jika membuat default di tengah param, yang tadinya hanya disarankan di belakang
function sayHi(string $first, string $middle = "Default Value", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

//without feature named argument
//sayHi("Muhammad", "Albair"); //error

//with feature named argument(PHP 8)
sayHi(first: "Muhammad", last: "Albair");


//without feature named argument
sayHello("Muhammad", "Ali", "Albair");

//with feature named argument(PHP 8)
sayHello(last: "Albair", first: "Muhammad", middle: "Ali");
