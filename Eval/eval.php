<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 13:48
 */
$string = "beautiful";
$time = "winter";

$str = 'This is a $string $time morning!';
echo $str . "\n";
eval("\$str = \"$str\";");
echo $str;
eval('function test(){echo "我是eval";} test();');