<?php
require '../vendor/autoload.php';

use Carbon\Carbon;$dt = Carbon::now();
echo $dt->year;

/*

月

carbon.php
$dt = Carbon::now();
echo $dt->month;

日

time.ph
$dt = Carbon::now();
echo $dt->day;

時

carbon.php
$dt = Carbon::now();
echo $dt->hour;

分

carbon.php
$dt = Carbon::now();
echo $dt->minute;

秒

carbon.php
$dt = Carbon::now();
echo $dt->second;

*/

/*

日付の加算・減算
日付の加算・減算には、add・subメソッドを利用します。

１年後・1年前

carbon.php

$dt = Carbon::now();
echo $dt->addYear();

$dt = Carbon::now();
echo $dt->subYear();

１月後・1月前

carbon.php

$dt = Carbon::now();
echo $dt->addMonth();

$dt = Carbon::now();
echo $dt->subMonth();

１日後・1日前

carbon.php

$dt = Carbon::now();
echo $dt->addDay();

$dt = Carbon::now();
echo $dt->subDay();

１時間後・1時間前

carbon.php

$dt = Carbon::now();
echo $dt->addHour();

$dt = Carbon::now();
echo $dt->subHour();

１分後・1分前

carbon.php

$dt = Carbon::now();
echo $dt->addMinute();

$dt = Carbon::now();
echo $dt->subMinute();

１秒後・1秒前

carbon.php

$dt = Carbon::now();
echo $dt->addSeconds();

$dt = Carbon::now();
echo $dt->subSeconds();

*/