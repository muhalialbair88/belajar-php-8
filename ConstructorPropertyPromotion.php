<?php

//versi dibawah 8, set manual property di construc
// class Product
// {
//     public string $id;
//     public string $name;
//     public int $price;
//     public int $quantity;
//     public function __constructor(string $id, string $name, int $price, int $quantity)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->price = $price;
//         $this->quantity = $quantity;
//     }
// }

//versi 8, tidak perlu membuat propertynya secara manual,
//langsung buat di param construct maka otomatis akan ke set/ke assign propertynya 
class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $quantity = 0,
        private bool $expensive = false
    ) {
    }
}

$product = new Product(id: "1", name: "Mie Ayam", price: 15000);
var_dump($product);

echo "Id: $product->id" . PHP_EOL;
echo "Makanan : $product->name " . PHP_EOL;
echo "Harga : $product->price" .  PHP_EOL;
