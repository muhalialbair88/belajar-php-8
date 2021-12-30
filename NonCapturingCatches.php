<?php

// doc: https://wiki.php.net/rfc/non-capturing%20catches

function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Invalid string");
    }
}

try {
    validate("     ");
    //di php 7  catch (Exception $e) {, di php 8 tidak wajib(jika tidak butuh) menuliskan variable exceptionnya
    //contoh nya pada catch di bawah ini
} catch (Exception) {
    echo "Invalid" . PHP_EOL;
}
