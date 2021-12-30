<?php

// doc: https://wiki.php.net/rfc/lsp%20errors
class ParentClass
{
    public function method(string $name)
    {
    }
}
class childClass extends ParentClass
{
    // jika parameter turunannya diubah maka akan error di php 8, di php 7 akan warning aja 
    public function method(string $name)
    {
    }
}
