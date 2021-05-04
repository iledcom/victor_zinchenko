<?php

class Vehicle {
	public $color;
	public $speed;
	public $brand;

	public function tripTime($distance) {
		$time = $distance / $this->speed;
		return $time;
	}
}

class Bicycle extends Vehicle {
	public $type;
	public $color = 'White';
	const CALORIES_PER_HOUR = 500;

	public function caloriesBurned($distance) {
		$time = $this->tripTime($distance);
		$calories = $time * self::CALORIES_PER_HOUR;
		return $calories;
	}

	public function tripTime($distance) {
		$time = parent::tripTime($distance) *1.2;
		return $time;	
	}
}

class Car extends Vehicle {
	public $fuel;
	public $color = 'Yellow';

	public function fuelConsumption($distance) {
		$result = ($this->fuel * $distance) / 100;
		return $result;
	}
}