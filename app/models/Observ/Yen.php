<?php
class Yen implements Currency {
    private $price;
 
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Yen Original Price : {$price}</p>";
    }
 
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Yen Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(120.52, 122.50);
    }
     
}