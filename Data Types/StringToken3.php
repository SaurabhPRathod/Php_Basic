<?php

$number = 100;
$longString = <<<'STRING'  
This string is spanned across multiple lines. We can use "double quotes" also. We have declared number <b>$number</b> before it.
STRING; //we can also use <<<"STRING" in that case $number will how its actual value.

echo $longString;

?>