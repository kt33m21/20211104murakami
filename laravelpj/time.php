<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;
echo $dt->month;
echo $dt->day;
echo $dt->hour;
echo $dt->minute;
echo $dt->second;



