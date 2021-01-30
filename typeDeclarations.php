<?php

declare (strict_types = 1);

class Person {
	public string $name;
	function __construct(string $name) {
		$this->name = $name;
	}
}

function totalAmt(float $income, float $debt): float {
	return $income - $debt;
}

function concater(array $names): string {
	$result = '';
	foreach ($names as $name) {
		$result = $result . $name;
	}
	return $result;
}

//$alvin = new Person(2);

$alvin = new Person("alvin");

echo $alvin->name;
echo "\n";
echo totalAmt(12000, 5000);
echo "\n";
echo concater(['john', 'jane', 'doe']);

//Interfaces

interface EmployeeInterface {
	public function getName();
}

class Employee implements EmployeeInterface {
	public $name;
	public function __construct(string $name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}

}

$user = new Employee('dwight');
echo "\n";
echo $user->getName();