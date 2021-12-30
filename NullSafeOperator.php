<?php
// doc : https://wiki.php.net/rfc/nullsafe_operator

class Address
{
    public ?string $address; // property bisa null
}
class User
{
    public ?string $country; // property bisa null
}

//manual null check versi 7 
function getCountry(?User $user): ?string
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }
    return null;
}
echo getCountry(null) . PHP_EOL;

//feature nullsafeoperator
//tidak perlu melakukan pengecekan null secara manual
function getCountryy(?User $user): ?string
{
    return $user?->address?->country;
}

echo getCountryy(null) . PHP_EOL;


//Validation di Abstract Function Trait