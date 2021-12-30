<?php

//doc: https://wiki.php.net/rfc/throw%20expression

// php versi 7 harus mengecek throw secara manual 
function sayHello(?string $name)
{
    if ($name == null) {
        throw new Exception("Tidak boleh null");
    }
    echo "Hello $name" . PHP_EOL;
}

//php 8 sekarang bisa lebih simple, menggunakan throw sebagai expression, contohnya di ternary operator
function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHello(null);
sayHelloExpression("Ali Albair");
