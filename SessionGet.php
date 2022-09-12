<?php

session_start();

if (isset($_SESSION["my_id"])) {
    echo $_SESSION["my_id"];
    //unset($_SESSION["my_id"]);
} else {
    echo 'No Id';
}
echo '<br/>';

if (isset($_SESSION["my_age"])) {
    echo $_SESSION["my_age"];
    //unset($_SESSION["my_age"]);
} else {
    echo 'No Age';
}
echo '<br/>';

// destroy the session
//session_destroy();


