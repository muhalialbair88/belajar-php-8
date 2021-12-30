<?php

// doc: https://wiki.php.net/rfc/mixed_type_v2
// mixed adalah alias dari union types alarray|bool|callable|int|float|null|object|resource|string
// tapi disarankan menggunakan union types
function testMixed(mixed $data): mixed
{
    if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "string";
    } else if (is_int($data)) {
        return 1;
    } else {
        return null;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("Ali"));
var_dump(testMixed(1));
var_dump(testMixed(new stdClass()));
