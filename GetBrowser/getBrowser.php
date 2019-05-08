<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 14:06
 */
// 获取浏览器的性能
echo $_SERVER['HTTP_USER_AGENT'] . "\n";
// 输出: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)

// 获取浏览器的性能
$browserInfo = get_browser(NULL , TRUE);
var_Dump($browserInfo);