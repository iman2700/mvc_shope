<?php 
class SchenkerShippingStrategy implements IShippingStrategy
{
	public function Calculate()
        {
            return 8.00;
        }
}