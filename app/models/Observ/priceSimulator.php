<?php class priceSimulator implements Observer {
    private $currencies;
     
    public function __construct() {
        $this->currencies = array();
    }
     
    public function addCurrency(Currency $currency) {
        array_push($this->currencies, $currency);
    }
     
    public function updatePrice() {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }
}