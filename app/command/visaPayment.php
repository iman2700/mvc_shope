<?php
require_once 'paymrntMethod.php'
class visaPayment implements paymrntMethod
{
	function execute()
	{
		echo 'visaPayment';
	}
}