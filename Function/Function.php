<?php
//$arr1 = array_fill(3, 4, 'PPN');
//print_r($arr1);

$arr = ['Index' => ['a' => 'b'], 'index' => ['a' => 'b'], 'index3' => ['a' => 1, 'bn' => 2]];
print_r(array_map('array_change_key_case', $arr));
#print_r(array_flip(array_change_key_case($arr, CASE_LOWER)));

