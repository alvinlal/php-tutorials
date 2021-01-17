<?php

class User {
	private $email;
	private $username;

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
}

$user1 = new User("yoshi@thenetninja.co.uk", "yoshi");

echo $user1->setName('mario');
echo $user1->addFriend();

?>