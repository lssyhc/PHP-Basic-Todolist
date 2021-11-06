<?php

require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$friend = input("Your Friend");
echo "Hi $friend" . PHP_EOL;