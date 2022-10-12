<?php

require "../vendor/autoload.php";

use CowSay\Cow;

$myCow = new Cow("Hello I'm a cow!");

$message = $myCow->say(); // she's talking !!!!
echo $message;
