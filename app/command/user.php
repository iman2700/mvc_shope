<?php
require_once 'paymrntMethod.php'
class user
{
	private paymrntMethod  $paymentMathod;
	__construct(paymrntMethod $_paymentMathod)
	{
		$this->$paymentMathod =  $_paymentMathod;
	}
	public function getpaymentMathod()
	{
		return $this->paymentMathod;
	}
}