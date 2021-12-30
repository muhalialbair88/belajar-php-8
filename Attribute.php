<?php
// doc : https: //www.php.net/manual/en/language.attributes.php
// doc : https: //www.php.net/manual-lookup.php?pattern=rfc%2Fattributes+v2&lang=en&scope=404quickref

// #[Attribute(Attribute::TARGET_PROPERTY)] //hanya bisa dibaca pada penggunaan property
// #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)] //jika ingin spesifik lebih dari 1
#[Attribute] // bisa dibaca pada semua penggunaan seperti funtion, class, properti dll
class NotBlank
{
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __constructor(int $min, int $max)
    {

        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    //cara menggunakan attribute di properti
    #[NotBlank]
    #[Length(min: 4, max: 10)] // ini cara penambahan Attribute di properti yang ada __constructor nya
    public ?string $username;

    #[NotBlank]
    #[Length(min: 8, max: 10)] // ini cara penambahan Attribute di properti yang ada __constructor nya
    public ?string $password;
}

//mebaca attribute via Reflection(1)

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object)
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object))
            throw new Exception("Property $property->name is null");
        if ($property->getValue($object) == null)
            throw new Exception("Property $property->name is null");
    }
}
//membuat attribute class instance
function validateLength(ReflectionProperty $property, object $object)
{
    if ($property->isInitialized($object) || $property->getValue($object) == null) {
        return; //return aja gk peduli karna ini akan divalidasi di validateNotBlank
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance(); // ini akan membuat deklarasi object + armumennya min 4 and max 10
        $valueLength = strlen($value);
        if ($valueLength < $length->min)
            throw new Exception("Property $property->name is to short");
        if ($valueLength > $length->hmax)
            throw new Exception("Property $property->name is too long");
    }
}

$request = new LoginRequest();
$request->username = "Ali"; // jika tidak di inisialisasi maka akan error(exception) dan dilempar throw
$request->password = "Rahasia";  // jika tidak di inisialisasi maka akan error(exception) dan dilempar throw
validate($request);
