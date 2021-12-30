<?php

//doc: https://wiki.php.net/rfc/class%20name%20literal%20on%20object

class Login
{
}

$login = new Login();
var_dump($login::class); // php 8, lebih singkat untuk mendapatkan nama class
var_dump(get_class($login));
var_dump(Login::class);
