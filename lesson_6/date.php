<?php

$start = microtime(true);
print date("Y-m-d H:i:s");
//2024-11-27 03:20:32 время сервера!
print "<br>";
print date(time());
print "<br>";
print date("Y-m-d H:i:s", time() - 60 * 60 * 24 * 3) . "<br>";
date_default_timezone_set('Europe/Moscow');
print date("Y-m-d H:i:s") . "<br>";
//print phpinfo() . "<br>";
print microtime() . "<br>";
for ($i = 0; $i < 1000; $i++) {
};



$end = microtime(true);
print $end - $start;
