<?php

require_once  __DIR__ . "/vendor/autoload.php";

use SebastianBergmann\Timer\Timer;
use IntelGUA\Person;

$per = new Person();
Timer::start();
for ($i=0; $i < 1000000; $i++) {
    # code...
    echo $per->saludar("Henry Diaz\n\n\n");
}
$time = Timer::stop();
var_dump($time);

print Timer::secondsToTimeString($time);
print Timer::resourceUsage();