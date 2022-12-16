<?php


$name = "Pedro";

$myName = &$name;

$name = "João";

echo $name;
echo $myName;


?>