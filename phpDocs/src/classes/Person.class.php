<?php
/**
 * Person class
 */
class Person {
	/**
	 * The firstName of the person
	 *
	 * @var string
	 */
	public $firstName;
	/**
	 * The lastName of the person
	 *
	 * @var string
	 */
	public $lastName;
	/**
	 * Constructor function
	 *
	 * Used to initialize firstName and lastName
	 *
	 * @param string $firstName The firstName of the person
	 * @param string $lastName The lastName of the person
	 */
	public function __construct(string $firstName, string $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

}