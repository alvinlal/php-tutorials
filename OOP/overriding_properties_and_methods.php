<?php

class User {
	private $email;
	public $username;
	public $role = 'member';

	public function __construct($email, $username) {
		$this->email = $email;
		$this->username = $username;
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

}

class AdminUser extends User {
	public $level;
	public $role = 'admin';
	public function __construct($username, $email, $level) {
		$this->level = $level;
		parent::__construct($username, $email);
	}
}

$userOne = new User("mario", "mario@thenetninja.co.uk");
$userTwo = new User("luigi", "luigi@thenetninja.co.uk");
$userThree = new AdminUser("yoshi", "yoshi@thenetninja.co.uk", 5);

echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

?>