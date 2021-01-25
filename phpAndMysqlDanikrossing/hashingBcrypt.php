<?php

$input = 'test123';

echo password_hash($input, PASSWORD_DEFAULT) . "</br>";

echo md5($input);
?>