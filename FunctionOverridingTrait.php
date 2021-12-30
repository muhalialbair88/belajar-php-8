<?php

// doc: https://wiki.php.net/rfc/abstract_trait_method_validation

//Validation di Abstract Function Trait
trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    //di php 8 jika parameternya diubah maka akan error
    //di php 7 jika parameternya dirubah akan warning saja
    //kalau mau berubah tidak usah implementasi traitnya 
    public function sampleFunction(int $name): string
    {
    }
}
