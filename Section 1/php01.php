<?php

echo "Hello World!!!";
echo "\n"; // new line \n does not work in a single quote.
echo "\n"; 
//variables 

$myName = "Lucifer";
$age = 25;
$boyosh = "age";

echo "The name's {$myName} and living for {$age} years";
echo "\n";
echo "The name's {$myName} and living for {$$boyosh} years"; // double dollar signs can be used to make another variable inside a string.