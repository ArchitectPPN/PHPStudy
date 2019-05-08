<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 10:29
 */
include "./ArrayAccessExample.php";

$arrayAccess = new ArrayAccessExample;

// 检查指定的键值是否存在
var_dump(isset($arrayAccess['ppp']));    // 不存在
var_dump(isset($arrayAccess['two']));    // 存在

// 得到指定键的值
var_dump($arrayAccess['two']);            // 键, 存在
var_dump($arrayAccess['two1']);           // 键, 不存在

// 得到指定键的值
unset($arrayAccess['two']);               // 键, 存在
var_dump($arrayAccess['two']);            // 键, 不存在

// 设置值
$arrayAccess['jke'] = '字符串~';
print_r($arrayAccess);