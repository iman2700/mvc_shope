<?php
require_once '../app/command/paymentmethod.php';
class payPalPayment implements paymentMethod
{
	function execute()
	{
		echo 'payPalPayment';
	}
}