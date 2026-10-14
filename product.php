<?php

// Your code here
class Product
{
    private $name;
    private $price;
    private $stock;

      public function setName($name)
        {
            $this->name = $name;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function setStock($stock)
        {
            $this->stock = $stock;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function addStock($amount)
        {
            $this->stock += $amount;
        }

        public function getStock()
        {
            return $this->stock;
        }

        
        public function purchase($amount)
        {
            if ($amount <= $this->stock) {
                $this->stock -= $amount;
                return true;
            } else {
                return false;
            }
        }
}  



$product = new Product();
$product->setName("Laptop");
$product->setPrice(999.99);
$product->setStock(10);

echo $product->getName(); // Laptop
$product->addStock(5);
echo $product->getStock(); // 15
$product->purchase(3);
echo $product->getStock(); // 12