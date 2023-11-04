<?php

require_once "../Helper/input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo "Hello $channel" . PHP_EOL;
