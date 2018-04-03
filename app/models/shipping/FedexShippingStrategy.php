<?php   
require_once '../app/models/shipping/IShippingStrategy.php';
class FedexShippingStrategy implements IShippingStrategy
{
	public function Calculate()
        {
            return 3.00;
        }
}