<?php

class User {
	protected $email;
	public $username;
	public $role = 'member';

	public function __construct($email, $username) {
		$this->email = $email;
		$this->username = $username;
	}

	public function __destruct() {
		echo "$this->username was removed <br>";
	}

	public function __clone() {
		$this->username = $this->username . '(cloned)<br>';
	}

	public function login() {
		echo "$this->username logged in.";
	}

	public function getName() {
		return $this->username;
	}

	public function addFriend() {
		return "$this->username added a new friend";
	}
	public function setName($username) {
		if (is_string($username) && strlen($username) > 1) {
			$this->username = $username;
			return "name has been updated to $this->username";
		} else {
			return "Invalid name";
		}
	}
	public function setEmail($email) {
		if (strpos($email, '@') > -1) {
			$this->email = $email;
		}
	}
	public function getEmail() {
		return $this->email;
	}
	public function message() {
		return "$this->email added a new friend";
	}

}

class AdminUser extends User {
	public $level;
	public $role = 'admin';
	public function __construct($username, $email, $level) {
		$this->level = $level;
		parent::__construct($username, $email);
	}
	public function message() {
		return "$this->email , an admin added a new friend";
	}
}

$userOne = new User("mario@thenetninja.co.uk", "mario");
$userTwo = new User("luigi@thenetninja.co.uk", "luigi");
$userThree = new AdminUser("yoshi", "yoshi@thenetninja.co.uk", 5);

$userFour = clone $userTwo;

echo $userFour->getName();

?>