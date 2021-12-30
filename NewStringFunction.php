<?php

// doc: https://wiki.php.net/rfc/str%20contains
// doc: https://wiki.php.net/rfc/add%20str%20starts%20with%20and%20ends%20with%20functions

var_dump(str_contains("Muhammad Ali Albair", "Ali"));
var_dump(str_contains("Muhammad Ali Albair", "Albair"));
var_dump(str_contains("Muhammad Ali Albair", "Budi")); // error karna tidak ketemu
echo PHP_EOL;
var_dump(str_starts_with("Muhammad Ali Albair", "Muhammad"));
var_dump(str_starts_with("Muhammad Ali Albair", "Ali"));
var_dump(str_starts_with("Muhammad Ali Albair", "Albair"));
echo PHP_EOL;
var_dump(str_ends_with("Muhammad Ali Albair", "Muhammad"));
var_dump(str_ends_with("Muhammad Ali Albair", "Ali"));
var_dump(str_ends_with("Muhammad Ali Albair", "Albair"));
