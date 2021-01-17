<?php

class User {
 public $email;
 public $name;

 public function __construct($email, $name) {
  $this->email = $email;
  $this->name = $name;
 }

 public function login() {
  echo "$this->name logged in.";
 }
}

$user1 = new User("yoshi@thenetninja.co.uk", "yoshi");

$user1->login();

?>