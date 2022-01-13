<?php

$iterationNb = $_GET["iteration"];
$iterationNb = (int) $iterationNb;

for ($i = 1; $i <= $iterationNb; $i++) {
    echo "<a> $i </a>";
}
