
<?php

//現在時刻のDataTimeオブジェクトのインスタンスを生成
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');

//引数に文字列を指定することで、インスタンスを生成
//$date = new DateTime('1999-11-02 05:27:42');
//echo $date->format('Y-m-d H:i:s');年


//年
//$date = new DateTime();
//echo $date->format('Y');

//月
//$date = new DateTime();
//echo $date->format('m');

//日
//$date = new DateTime();
//echo $date->format('d');

//曜日
//$date = new DateTime();
//echo $date->format('D');

//時
//$date = new DateTime();
//echo $date->format('H');

//分
//$date = new DateTime();
//echo $date->format('i');

//秒
//$date = new DateTime();
//echo $date->format('s');


//さまざまな出力形式

/*

ATOM

<?php
$date = new DateTime();
echo $date->format(DateTime::ATOM);

COOKIE

<?php
$date = new DateTime();
echo $date->format(DateTime::COOKIE);

RSS

<?php
$date = new DateTime();
echo $date->format(DateTime::RSS);

W3C

<?php
$date = new DateTime();
echo $date->format(DateTime::W3C);

詳しくは「ララベル基本講座　日付と時刻について学ぼう」をみて！

*/