<?php

$iterationNb = $_GET["iteration"];
$iterationNb = (int) $iterationNb;

for ($i = 0; $i < $iterationNb; $i++) {
    echo "hello world" . "<br>";
}
