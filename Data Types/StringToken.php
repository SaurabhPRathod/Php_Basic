<?php

$preferedHost = 'Linux';
$preferedLanguage = 'PHP';
$storeString = <<<STRING
This string is spanned across multiple lines. <br>
The preferred host in this example is $preferedHost.
The preferred language in this example is $preferedLanguage
STRING;

echo $storeString;

?>