<?php

// https://www.section.io/engineering-education/php-superglobals

$global_var = 9;

function printGlobal() {
    echo $GLOBALS['global_var'];
}

printGlobal();