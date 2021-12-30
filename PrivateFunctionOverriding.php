<?php

// doc : https://wiki.php.net/rfc/inheritance_private_methods

// di php 8 jika private function parent dan childnya sama namun parameter/return valuenya berbeda itu gpp, karna dianggap berbeda bukan meng ovveride
// jika di php 7 membuat function private overriding dengan return value / parameter yang sama maka akan warning, padahal private tidak bisa di overriding 
class Manager
{
    private function test(): void
    {
    }
}


class VicePresident extends Manager
{
    public function test(string $name): void
    {
    }
}
