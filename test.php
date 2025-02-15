<?php

require 'vendor/autoload.php';

use Mohammadintsar\UniqueValueArr\UniqueArray;

$array = [1, 2, 2, 3, 4, 4, 5];
print_r(UniqueArray::getUnique($array));
