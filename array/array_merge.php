<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);