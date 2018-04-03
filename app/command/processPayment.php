<?php 

class processPayment
{
	function processUserPayment(paymrntMethod $paymrnenName)
	{require_once '../app/command/paymrntMethod.php';
require_once '../app/command/user.php';
		$user=new user($paymrnenName);
		$paymentMethod=$user->getpaymentMathod();
		$this->executePaymentMethod($paymentMethod);
	}
	function executePaymentMethod(paymrntMethod $paymentMethod)
	{
		$paymentMethod->execute();
	}
	
	 
}