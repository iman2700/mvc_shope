   <?php
   private $price;
     
    public function __construct($price) {
        $this->price = $price;
        echo "<p>Pound Original Price: {$price}</p>";
    }
     
    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Pound Updated Price : {$this->price}</p>";
    }
     
    public function getPrice() {
        return f_rand(0.65, 0.71);
    }
     
}