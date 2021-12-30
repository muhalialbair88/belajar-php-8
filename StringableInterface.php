<?php

//doc: https://wiki.php.net/rfc/stringable

function sayHello(Stringable $stringable)
{
    // jika membutuhkan magic function __toString
    //di php 8 bisa menambahkan di parameter functionnya
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

//Override toString Function
class Person // tidak perlu implements stringable
{
    public function __toString(): string //jika dihapus error
    {
        return "Person";
    }
}
sayHello(new Person());
