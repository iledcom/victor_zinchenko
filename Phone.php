<?php 

class Phone {

	public function getNumberByName($name) {
		//...
	}

	public function dialNumber() {
		//...
	}

	public function call($name) {
		$namber = $this->getNumberByName($name);
		$this->dialNumber($namber);
	}
}

$phone1 = new Phone;
$phone1->call('Sasha');