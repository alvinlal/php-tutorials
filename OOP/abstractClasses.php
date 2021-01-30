<?php

abstract class Visa {
	public function visaPayment() {
		return 'Performed visa payment';
	}

	abstract public function getPayment();
}

class BuyProduct extends Visa {
	public function getPayment() {
		return $this->visaPayment();
	}
}

$product = new BuyProduct();
echo $product->getPayment();